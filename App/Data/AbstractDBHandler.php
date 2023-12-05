<?php

declare(strict_types=1);

namespace App\Data;

use PDO;

abstract class AbstractDBHandler
{
    private ?PDO $pdo = null;

    private function connect(): void
    {
        $config = require 'config.php';
        $dsn = vsprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s', $config['DBConnection']);
        $this->pdo = new PDO(
            $dsn, $config['DBUsername'], $config['DBPassword'], $config['DBOptions']
        );
    }

    private function disconnect(): void
    {
        $this->pdo = null;
    }
    // Todo: add possibility to add extra options: fetch_column, fetch_key_pair, fetch_unique, fetch_group

    protected function read(string $sql, array $bindings = [], bool $multipleRows = true): bool|array
    {
        self::connect();
        $statement = $this->pdo->prepare($sql);
        $statement->execute($bindings);

        if ($multipleRows) {
            $result = $statement->fetchAll();
        } else {
            $result = $statement->fetch();
        }
        self::disconnect();

        return $result;
    }

    protected function create(string $sql, array $bindings = []): bool|int
    {
        self::connect();
        $statement = $this->pdo->prepare($sql);
        $statement->execute($bindings);
        $id = (int) $this->pdo->lastInsertId();
        $affected = $statement->rowCount();
        self::disconnect();

        return ($affected === 1) ? $id : false;
    }

    protected function update(string $sql, array $bindings = []): int
    {
        self::connect();
        $statement = $this->pdo->prepare($sql);
        $statement->execute($bindings);
        self::disconnect();

        return $statement->rowCount();
    }

    protected function delete(string $sql, array $bindings = []): int
    {
        self::connect();
        $statement = $this->pdo->prepare($sql);
        $startCount = $statement->rowCount();
        $statement->execute($bindings);
        self::disconnect();

        $stopCount = $statement->rowCount();
        return $startCount - $stopCount;
    }

}