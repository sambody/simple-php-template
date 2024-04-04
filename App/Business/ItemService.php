<?php

declare(strict_types=1);

namespace App\Business;

use App\Data\ItemDAO;
use App\Entities\Item;

class ItemService
{
    private ItemDAO $itemDAO;

    public function __construct()
    {
        $this->itemDAO = new ItemDAO();
    }

    public function getAll(): ?array
    {
        $resultSet = $this->itemDAO->getAllItems();

        if (!$resultSet) {
            return null;
        }

        $list = array();
        foreach ($resultSet as $result) {
            $item = new Item((string) $result['titel']);
            $list[] = $item;
        }
        return $list;
    }

    public function get(int $id): ?Item
    {
        $result = $this->itemDAO->getItem($id);

        if (!$result) {
            return null;
        }

        return new Item((string) $result['titel']);
    }

    public function add(string $titel): ?bool
    {
        $result = $this->itemDAO->addItem($titel);

        if (!$result) {
            return null;
        }

        return true;
    }

    public function update(int $id, string $titel): ?bool
    {
        $result = $this->itemDAO->updateItem($id, $titel);

        if (!$result) {
            return null;
        }

        return true;
    }

    public function remove(int $id): ?bool
    {
        $result = $this->itemDAO->remove($id);

        if (!$result) {
            return null;
        }

        return true;
    }
}
