<?php
namespace CheffJeff\Testblok;

class HelloWorld
{
    public function sayHello(string $name): string
    {
        return "Hello $name!";
    }
}