<?php

declare(strict_types=1);

namespace App\Data;

use PDO;
use PDOStatement;

class DBConnection
{
    public ?PDO $pdo; // made public to access it with lastInsertId
    private array $config;

    public function __construct(array $config, string $username = 'root', string $password = '', array $options = [])
    {
        $this->config = require('config.php');
        // Add array elements to string:
        $dsn = vsprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s', $this->config['DBConnection']);
        $this->pdo = new PDO($dsn, $this->config['DBUsername'], $this->config['DBPassword'], $this->config['DBOptions']);
    }

    public function run(string $sql, array $params = null): bool|PDOStatement
    {
        // use execute if there are parameters
        if (!$params) {
            $statement = $this->pdo->query($sql);
        } else {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        }
        $this->pdo = null;

        return $statement;
    }
}