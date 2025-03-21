<?php
require __DIR__.'/vendor/autoload.php';
use CheffJeff\Testblok\HelloWorld;



$helloWorld = new HelloWorld();
echo $helloWorld->sayHello('Jeffrey');