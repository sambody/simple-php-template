<?php

declare(strict_types=1);

namespace Data;

use PDO;
use PDOStatement;

class DBConnection
{
    public ?PDO $pdo; // made public to access it with lastInsertId

    public function __construct(array $config, string $username = 'root', string $password = '', array $options = [])
    {
        // Add array elements to string:
        $dsn = vsprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s', $config);
        // Alternative solutions:
        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        // $dsn = 'mysql:' . http_build_query($config, '', ';');
        $defaultOptions = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        // Overwrite default values for same key:
        $options = array_replace($defaultOptions, $options);
        $this->pdo = new PDO($dsn, $username, $password, $options);
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