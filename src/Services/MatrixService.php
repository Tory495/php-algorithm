<?php

declare(strict_types=1);

namespace Tory495\PhpAlgorithm\Services;

// Дана матрица n x m. Нужно написать PHP функцию, которая на вход принимает координаты элемента (индекс строки, индекс столбца),
// а возвращает сумму всех его соседей. Соседним считается элемент, находящийся от текущего на одну ячейку влево, вправо, вверх или вниз.
// Диагональные элементы соседними не считаются.
// Например, в матрице ниже соседними элементами для (0, 0) будут 71 и 13, а их сумма равна 84.
// Для элемента (3, 2) соседними элементами являются 11, 0, 1, 34, а их сумма равна 46.

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
