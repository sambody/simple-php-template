<?php

declare(strict_types=1);

namespace App\Data;

// New DB connection for each function? Or reuse?

class ItemDAO extends AbstractDBHandler
{
    public function getAllItems(): bool|array
    {
        // Get all rows
        $sql = "select * from items order by naam";
        return $this->read($sql);
    }

    public function getItem(int $id): bool|array
    {
        // Get single row
        $sql = "select * from items where id = :id";
        $placeholders = ['id' => $id];
        return $this->read($sql, $placeholders, false);
    }

//    public function getId(string $email): string
//    {
//        // Get single value
//        $sql = "select id from items where email = :email";
//        $db = new DBConnection($this->config);
//        return $db->run($sql, ['email' => $email])->fetchColumn();
//    }

//    public function isExisting(int $id): bool
//    {
//        // Check existence
//        $sql = "select 1 from items where id = :id";
//        $db = new DBConnection($this->config);
//        return $db->run($sql, ['id' => $id])->fetchColumn();
//    }

    public function getTotalNumberOfItems(): int
    {
        // Get count
        $sql = "select count(1) from items";
        return $this->update($sql); // return rowcount; not tested
    }

    public function addItem(string $titel): false|string
    {
        // Add single row
        $sql = "insert into items (titel) values (:titel)";
        $placeholders = [
            'titel' => $titel,
        ];
        return $this->create($sql, $placeholders);
    }

    public function updateItem(int $id, string $titel): int
    {
        // Update row
        $sql = "update items set titel = :titel where id = :id";
        $placeholders = [
            'id' => $id,
            'titel' => $titel
        ];
        return $this->update($sql, $placeholders);

    }

    public function removeItem(int $id): int
    {
        // Remove single row
        $sql = "delete from items where id = :id";
        $placeholders = ['id' => $id];
        return $this->delete($sql, $placeholders);
    }
}