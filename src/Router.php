<?php

declare(strict_types=1);

namespace Rosetta\Core;

class Router {
	public function __construct(string $origin) {
		echo 'Hello world from ' . $origin . PHP_EOL;
	}
}
