<?php
require '/var/www/html/vendor/autoload.php';
use MatthiasMullie\Minify;

$sourcePath = './js/jquery-3.1.1.js';
$minifier = new Minify\JS($sourcePath);

// we can even add another file, they'll then be
// joined in 1 output file
$sourcePath2 = './js/bootstrap.js';
$minifier->add($sourcePath2);

// save minified file to disk
$minifiedPath = './js/final.js';
$minifier->minify($minifiedPath);

// or just output the content
echo $minifier->minify();
?>