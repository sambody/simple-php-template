<?php

declare(strict_types=1);

namespace App\Data;

use PDO;

abstract class AbstractDBHandler
{
    private ?PDO $pdo = null;

    private function connect(): void
    {
        // todo: add if/else for dev/prod environment => different config file
        $config = require 'config-db-local.php';
        $dsn = vsprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s', $config['DBConnection']);
        $this->pdo = new PDO(
            $dsn, $config['DBUsername'], $config['DBPassword'], $config['DBOptions']
        );
    }

    private function disconnect(): void
    {
        $this->pdo = null;
    }

    // CRUD basic operations: Create, Read, Update, Delete
    protected function read(string $sql, array $placeholders = [], bool $multipleRows = true): bool|array
    {
        $this->connect();
        $statement = $this->pdo->prepare($sql);
        $statement->execute($placeholders);

        if ($multipleRows) {
            $result = $statement->fetchAll();
        } else {
            $result = $statement->fetch();
        }
        $this->disconnect();

        // return the resulting rows
        return $result;
    }

    protected function create(string $sql, array $placeholders = []): bool|int
    {
        $this->connect();
        $statement = $this->pdo->prepare($sql);
        $statement->execute($placeholders);
        $id = (int) $this->pdo->lastInsertId();
        $affected = $statement->rowCount();
        $this->disconnect();

        // return the created id or false
        return ($affected === 1) ? $id : false;
    }

    protected function update(string $sql, array $placeholders = []): int
    {
        $this->connect();
        $statement = $this->pdo->prepare($sql);
        $statement->execute($placeholders);
        $this->disconnect();

        // return the number of updated rows
        return $statement->rowCount();
    }

    protected function delete(string $sql, array $placeholders = []): int
    {
        $this->connect();
        $statement = $this->pdo->prepare($sql);
        $startCount = $statement->rowCount();
        $statement->execute($placeholders);
        $this->disconnect();
        $stopCount = $statement->rowCount();

        // return the number of deleted rows
        return $startCount - $stopCount;
    }

}