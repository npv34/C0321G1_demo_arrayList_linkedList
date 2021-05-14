<?php

namespace App;

use JetBrains\PhpStorm\Pure;

class ArrayList
{
    public array $container;
    public int $limit;

    public function __construct($limit)
    {
        $this->container = [];
        $this->limit = $limit;
    }

    function isEmpty(): bool
    {
        return empty($this->container);
    }

    function add($item)
    {
        if (!$this->isFull()) {
            array_push($this->container, $item);
        } else {
            echo "Danh sach da day";
        }
    }

    function getAll(): array
    {
        return $this->container;
    }

    function remove(int $index)
    {
        if (!$this->isEmpty()) {
            unset($index, $this->container);
        } else {
            echo "Danh sach rong";
        }
    }

    #[Pure] function findByIndex(int $index)
    {
        if (!$this->isEmpty()) {
            return $this->container[$index];
        }

        return -1;
    }

    function update(int $index, $item)
    {
        if (!$this->isEmpty()) {
            $this->container[$index] = $item;
        } else {
            echo "Danh sach da day";
        }
    }

    #[Pure] function size(): int
    {
        return count($this->container);
    }

    #[Pure] function isFull(): bool
    {
        return $this->limit == $this->size();
    }

    #[Pure] public function __toString(): string
    {
        return "Danh sach: " . implode(',', $this->getAll());
    }
}