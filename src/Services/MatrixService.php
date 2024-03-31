<?php

declare(strict_types=1);

namespace Tory495\PhpAlgorithm\Services;

class MatrixService
{
    private const N = 5;
    private const M = 4;
    private const MATRIX = [
        [51, 71, 1, 50],
        [13, 5, 19, 11],
        [60, 4, 11, 20],
        [13, 34, 17, 0],
        [16, 53, 1, 32]
    ];

    public function sumAdjacent(int $row, int $col): int|false
    {
        $result = 0;

        if ($col < 0 || $col >= self::M || $row < 0 || $row >= self::N) {
            return false;
        }

        if ($row - 1 >= 0) {
            $result += self::MATRIX[$row - 1][$col];
        }

        if ($row + 1 < self::N) {
            $result += self::MATRIX[$row + 1][$col];
        }

        if ($col - 1 >= 0) {
            $result += self::MATRIX[$row][$col - 1];
        }

        if ($col + 1 < self::M) {
            $result += self::MATRIX[$row][$col + 1];
        }

        return $result;
    }
}
