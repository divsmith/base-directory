<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$config = include 'config.php';

$finder->depth('== ' . $config['directory-depth']);
$finder->directories()->in(__DIR__. '/' . $config['directory'])->exclude('vendor');

foreach($finder as $directory)
{
    var_dump($directory);
}

