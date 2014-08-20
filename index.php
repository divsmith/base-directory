<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();

$finder->depth('== 0');
$finder->directories()->in(__DIR__)->exclude('vendor');

foreach($finder as $directory)
{
    var_dump($directory);
}

