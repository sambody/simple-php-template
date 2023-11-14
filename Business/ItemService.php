<?php

declare(strict_types=1);

namespace Business;

use Data\ItemDAO;
use Entities\Item;

class ItemService
{
    private ItemDAO $itemDAO;

    public function __construct()
    {
        $this->itemDAO = new ItemDAO();
    }

    public function getAll(): ?array
    {
        $resultSet = $this->itemDAO->getAll();

        if (!$resultSet) {
            return null;
        }

        $list = array();
        foreach ($resultSet as $result) {
            $item = new Item($result['titel']);
            $list[] = $item;
        }
        return $list;
    }

    public function get(int $id): ?Item
    {
        $result = $this->itemDAO->get($id);

        if (!$result) {
            return null;
        }

        return new Item($result['titel']);
    }

    public function add(string $titel): ?string
    {
        $result = $this->itemDAO->add($titel);

        if (!$result) {
            return null;
        }

        return $result; // return last inserted id
    }

    public function remove(int $id): ?bool
    {
        $result = $this->itemDAO->remove($id);

        if (!$result) {
            return null;
        }

        return true;
    }

    public function update(int $id, string $titel): ?bool
    {
        $result = $this->itemDAO->update($id, $titel);

        if (!$result) {
            return null;
        }

        return true;
    }
}
