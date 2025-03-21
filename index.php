<?php
require __DIR__.'/vendor/autoload.php';
use Lyfter\Testblok\HelloWorld;



$helloWorld = new HelloWorld();
echo $helloWorld->sayHello('Jeffrey');