#!/usr/bin/env php
<?php
$char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789éèà&#!$€£%+=@';

$length   = (!empty($argv[1]) && (int)$argv[1] > 0) ? (int)$argv[1] : mt_rand(30, 50);
$password = '';

for ($i = 0; $i < $length; $i++) {
    $password .= mb_substr($char, rand(0, (mb_strlen($char)-1)), 1);
}

echo $password.PHP_EOL;
