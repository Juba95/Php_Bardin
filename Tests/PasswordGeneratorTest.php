<?php
/** User = Juba */

namespace Tests\OKLM\Stringgenerator;

use OKLM\StringGenerator\PasswordGenerator;

class PasswordGeneratorTest extends  \PHPUnit_Framework_TestCase
{
    /**
     * Il genere un nombre entre 10 et 1000 (en password_hard)
     * @throws \Exception
     */
    public function testGenerateLength()
    {

        $length = mt_rand(10, 1000);
        $password = PasswordGenerator::generate($length, PasswordGenerator::PASSWORD_HARD);
        $passwordLength= mb_strlen($password);

        $this->assertEquals($length, $passwordLength);
    }
}