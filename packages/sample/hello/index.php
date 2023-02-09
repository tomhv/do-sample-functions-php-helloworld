<?php
 
function main(array $args) : array
{
    $name = $args["name"] ?? "Pablo";

    $greeting = "Hello, {$name}!";
    echo $greeting;

    return [
        'body' => $greeting,
    ];
}
