<?php

declare(strict_types=1);

namespace Tory495\PhpAlgorithm\Classes;

// Написать PHP класс, который реализует структуру данных Дек, максимальный размер которого определяется заданным числом в момент создания экземпляра класса.
// В классе должны быть реализованы методы:

// pushBack(value) - добавить элемент в конец дека. Если в деке уже находится максимальное число элементов, вернуть false.
// pushFront(value) - добавить элемент в начало дека. Если в деке уже находится максимальное число элементов, вернуть false.
// popBack() - вывести первый элемент дека и удалить его. Если дек был пуст, вернуть false.
// popFront() вывести последний элемент дека и удалить его. Если дек был пуст, вернуть false.

// Внимание: все операции должны выполняться за O(1), при реализации используйте кольцевой буфер.

class Deque
{
    private int $size;
    private int $start = 0;
    private int $end = 0;
    private array $buf;

    public function __construct(int $size)
    {
        $this->size = $size;
        $this->buf = array_fill(0, $size, null);
    }

    public function pushBack($value)
    {
        if ($this->isFull()) {
            return false;
        }

        $this->buf[$this->end] = $value;
        $this->end = ($this->end + 1) % $this->size;
        return true;
    }

    public function pushFront($value)
    {
        if ($this->isFull()) {
            return false;
        }

        $this->start = ($this->start - 1 + $this->size) % $this->size;
        $this->buf[$this->start] = $value;
        return true;
    }

    public function popBack()
    {
        if ($this->isEmpty()) {
            return false;
        }

        $this->end = ($this->end - 1 + $this->size) % $this->size;
        $value = $this->buf[$this->end];
        $this->buf[$this->end] = null;
        return $value;
    }

    public function popFront()
    {
        if ($this->isEmpty()) {
            return false;
        }

        $value = $this->buf[$this->start];
        $this->buf[$this->start] = null;
        $this->start = ($this->start + 1) % $this->size;
        return $value;
    }

    private function isFull()
    {
        return ($this->end + 1) % $this->size === $this->start;
    }

    private function isEmpty()
    {
        return $this->start === $this->end;
    }
}
