<?php

declare(strict_types=1);

namespace Tory495\PhpAlgorithm;

use DateTime;
use Tory495\PhpAlgorithm\Services\AlgorithmService;

class App
{
	public function run(): void
	{
		$algorithmService = new AlgorithmService();
		echo $algorithmService->tuesdayCount(new DateTime('01-03-2024'), new DateTime('08-04-2024')) . PHP_EOL;
	}
}
