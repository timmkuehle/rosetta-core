<?php

declare(strict_types=1);

namespace Rosetta\Core;

require __DIR__ . '/../vendor/autoload.php';

class Router {
	public static function init() {
		self::initController(self::getRequestUri());
	}

	private static function initController(string $request_uri) {
		echo "Request URI {$request_uri}" . PHP_EOL;
	}

	private static function getRequestUri(): string {
		return $_SERVER['REQUEST_URI'] ?? '/';
	}
}
