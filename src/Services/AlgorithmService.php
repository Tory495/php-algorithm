<?php

declare(strict_types=1);

namespace Tory495\PhpAlgorithm\Services;

use DateTime;

// Реализовать на PHP расчет количества вторников между двумя датами на PHP. Алгоритм должен быть наиболее оптимальный

class AlgorithmService
{
    private const TUESDAY_INDEX = 2;

    public function tuesdayCount(DateTime $startDate, DateTime $endDate): int
    {
        date_default_timezone_set('Europe/Moscow');
        $count = 0;

        while ($startDate <= $endDate) {
            if ($startDate->format('N') == self::TUESDAY_INDEX) {
                $interval = $startDate->diff($endDate);
                $count = intdiv($interval->days, 7) + 1;
                break;
            }

            $startDate->modify('+1 day');
        }

        return $count;
    }
}
