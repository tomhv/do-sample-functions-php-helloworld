<?php

require __DIR__ . '/vendor/autoload.php';

use Tomhv\Hello\Greeter;

function main(array $args) : array
{
    return [
        'body' => $args,
    ];

    $name = $args["name"] ?? "Pablo";

    return [
        'body' => Greeter::greet($name),
    ];
}
