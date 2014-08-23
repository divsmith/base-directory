<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$config = include 'config.php';

$finder->depth('== ' . $config['root-depth']);
$finder->directories()->in(__DIR__. '/' . $config['root-path'])->exclude($config['exclude']);

foreach($finder as $directory)
{
    echo "<h1><a href=\"/{$directory->getRelativePathname()}/{$config['url-path']}/\">{$directory->getRelativePathname()}</a></h1>";
}

