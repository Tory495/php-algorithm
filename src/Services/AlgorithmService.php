<?php

declare(strict_types=1);

namespace Tory495\PhpAlgorithm\Services;

use DateTime;

// Реализовать на PHP расчет количества вторников между двумя датами на PHP. Алгоритм должен быть наиболее оптимальный

class AlgorithmService
{
	private const TUESDAY_INDEX = 1;

	public function tuesdayCount(DateTime $startDate, DateTime $endDate): int
	{
		$count = 0;

		while ($count === 0 && $startDate <= $endDate) {
			echo $startDate->format('N') . PHP_EOL;

			$startDate->modify('+1 day');
		}

		return 1;
	}
}
