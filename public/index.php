<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

// TODO: Define experiment config in ../experiment.config.php
$experimentConfig = require __DIR__ . '/../experiment.config.php';

$app = AppFactory::create();

/**
 * The entrypoint of the application.
 *
 * Given the experiment config above (see `$experimentConfig`), GET / should:
 *
 * 1. Determine whether the logged-out user should be in an experiment; and
 * 2. Determine which group the logged-out user should be in.
 *
 * If the logged-out user has already been put in an experiment group, then they should be put in
 * the same group for all subsequent requests.
 */
$app->get(
	'/',
	static function ( Request $request, Response $response, $args ) {
		// TODO: Add experiment framework here

		$payload = [
			// TODO: Add experiment status for logged-out user to response here
		];

		$encodedPayload = json_encode( $payload, JSON_PRETTY_PRINT );
		$escapedEncodedPayload = htmlspecialchars( $encodedPayload );

		$response->getBody()
			->write( <<<HTML
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Metrics Platform Technical Task</title>
</head>
<body>
	<p>The payload generated by the experiment framework is:</p>
	<pre>{$escapedEncodedPayload}</pre>
</body>
</html>
HTML
			);

		return $response->withHeader( 'Content-Type', 'text/html' );
	}
);

$app->run();