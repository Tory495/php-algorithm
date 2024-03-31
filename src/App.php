<?php

declare(strict_types=1);

namespace Tory495\PhpAlgorithm;

use Tory495\PhpAlgorithm\Classes\Deque;

class App
{
    public function run(): void
    {
        $deque = new Deque(7);
        $deque->pushFront(1);
        $deque->pushFront(2);
        $deque->pushFront(3);
        $deque->pushFront(4);
        echo $deque->popBack() . PHP_EOL; // 1
        echo $deque->popFront() . PHP_EOL; // 4
        echo $deque->popFront() . PHP_EOL; // 3
        echo $deque->popFront() . PHP_EOL; // 2
        var_dump($deque->popFront()) . PHP_EOL; // false
        $deque->pushFront(1);
        $deque->pushFront(2);
        $deque->pushFront(3);
        $deque->pushFront(4);
        $deque->pushFront(5);
        $deque->pushFront(6);
        $deque->pushFront(7);
        $deque->pushFront(8);
        var_dump($deque->popFront()); // 6
        $deque->pushBack(10);
        var_dump($deque->popBack()); // 10
    }
}
