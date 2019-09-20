<?php

require_once __DIR__ . '/vendor/autoload.php';

$fs = org\bovigo\vfs\vfsStream::setup();
$source_path = $fs->url() . '/f1';
file_put_contents($source_path, 'A');
$destination_path = $fs->url() . '/f2';
var_dump(copy($source_path, $destination_path));
var_dump(file_get_contents($destination_path));