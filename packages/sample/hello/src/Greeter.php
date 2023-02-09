<?php

namespace Tomhv\Hello;

final class Greeter
{
    public static function greet(string $name): string
    {
        return "Hello, {$name}!";
    }
}
