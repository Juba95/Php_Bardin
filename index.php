<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/vendor/autoload.php';

//$slugify = new \Cocur\Slugify\Slugify();
//echo $slugify->slugify('Mé àrè azdkj dz ak azd HJVJV');

echo \OKLM\StringGenerator\PasswordGenerator::generate(100, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_HARD);