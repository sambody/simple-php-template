<?php

declare(strict_types=1);

namespace Data;

// TODO: test all connections
// New DB connection for each function?

class ItemDAO
{
    private array $config;

    public function __construct()
    {
        $this->config = require('config.php'); // adapt path?
    }

    public function getAll(): bool|array
    {
        // Get all rows
        $sql = "select * from items order by titel";
        $db = new DBConnection($this->config);
        return $db->run($sql)->fetchAll();
    }

    public function get(int $id)
    {
        // Get single row
        $sql = "select * from items where id = :id";
        $db = new DBConnection($this->config);
        return $db->run($sql, ['id' => $id])->fetch();
    }

    public function getId(string $email): string
    {
        // Get single value
        $sql = "select id from users where email = :email";
        $db = new DBConnection($this->config);
        return $db->run($sql, ['email' => $email])->fetchColumn();
    }

    public function isExisting(int $id): bool
    {
        // Check existence
        $sql = "select 1 from items where id = :id";
        $db = new DBConnection($this->config);
        return $db->run($sql, ['id' => $id])->fetchColumn();
    }

    public function getTotalNumberOfItems(): int
    {
        // Get count
        $sql = "select count(1) from items";
        $db = new DBConnection($this->config);
        return $db->run($sql)->fetchColumn(); // return count
    }

    public function add(string $titel): false|string
    {
        // Add single row
        $sql = "insert into items (titel) values (:titel)";
        $db = new DBConnection($this->config);
        $db->run($sql, ['titel' => $titel]);
        return $db->pdo->lastInsertId(); // return last inserted id
    }

    public function update(int $id, string $titel): int
    {
        // Update row
        $sql = "update items set titel = :titel where id = :id";
        $db = new DBConnection($this->config);
        return $db->run($sql, ['id' => $id, 'titel' => $titel])->rowCount(); // return updated rows count
    }

    public function remove(int $id): int
    {
        // Remove single row
        $sql = "delete from items where id = :id";
        $db = new DBConnection($this->config);
        return $db->run($sql, ['id' => $id])->rowCount();
    }

//    public function removeByCategory(string $category): int
//    {
//        // Remove multiple rows
//        $sql = "delete from items where category = :category";
//        $db = new DBConnection($this->config);
//        return $db->run($sql, ['category' => $category])->rowCount();
//    }
}