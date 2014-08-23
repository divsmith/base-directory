<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$config = include 'config.php';

$finder->depth('== ' . $config['directory-depth']);
$finder->directories()->in(__DIR__. '/' . $config['directory'])->exclude('vendor');

foreach($finder as $directory)
{
    echo "<h1><a href=\"/{$directory->getRelativePathname()}/public/index.php\">{$directory->getRelativePathname()}</a></h1>";
}

