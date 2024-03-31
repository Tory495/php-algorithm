<?php

declare(strict_types=1);

namespace Tory495\PhpAlgorithm;

use Tory495\PhpAlgorithm\Services\MatrixService;

class App
{
    public function run()
    {
        $matrixService = new MatrixService();
        echo $matrixService->sumAdjacent(0, 0) . PHP_EOL; // 84
        echo $matrixService->sumAdjacent(3, 2) . PHP_EOL; // 46
        echo $matrixService->sumAdjacent(7, 7) . PHP_EOL; // false
        echo $matrixService->sumAdjacent(0, -1) . PHP_EOL; // false
        echo $matrixService->sumAdjacent(4, 3) . PHP_EOL; // 1
    }
}
