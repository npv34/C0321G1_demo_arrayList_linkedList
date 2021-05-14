<?php


use App\LinkedList;

require_once "./vendor/autoload.php";

$linkedList = new LinkedList();
$linkedList->addFirstNode(10);
$linkedList->addFirstNode(15);
$linkedList->addFirstNode(25);
$linkedList->addLastNode(20);
$linkedList->addLastNode(30);
//var_dump($linkedList->getList());

$linkedList->addOfIndex(3, 100);

var_dump($linkedList->getList());

