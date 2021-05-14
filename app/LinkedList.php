<?php

namespace App;

class LinkedList {
    public $firstNode;
    public $lastNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }

    function addFirstNode($data)  {
        $node = new Node($data);
        if (!$this->firstNode) {
            $this->firstNode = $node;
            $this->lastNode = $node;
        } else {
            $node->link = $this->firstNode;
            $this->firstNode = $node;
        }

    }

    function getList() {
        return $this->firstNode;
    }

    function addLastNode($data) {
        if (!$this->firstNode) {
            $this->addFirstNode($data);
        } else {
            $node = new Node($data);
            $this->lastNode->link = $node;
            $this->lastNode = $node;
        }
    }

    function addOfIndex($index, $data) {
        $node = new Node($data);
        $preNode = $this->firstNode;
        $currNode = $this->firstNode;

        for ($i = 1; $i < $index; $i++) {
            $preNode = $currNode;
            $currNode = $preNode->link;
        }

        $temLink = $currNode->link;

        $currNode->link = $node;
        $node->link = $temLink;

    }
}