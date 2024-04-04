<?php

declare(strict_types=1);

namespace App\Data;

// New DB connection for each function? Or reuse?

class ItemDAO extends AbstractDBHandler
{
    // CAREFUL: Function names have to be different from AbstractDBHandler names !!
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

    public function getItemCount(): int
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

    public function remove(int $id): int
    {
        // Remove single row
        $sql = "delete from items where id = :id";
        $placeholders = ['id' => $id];
        return $this->delete($sql, $placeholders);
    }
}