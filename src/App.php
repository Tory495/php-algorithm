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
		$algorithmService->tuesdayCount(new DateTime('01-01-2024'), new DateTime('25-01-2024'));
	}
}
