<?php

namespace BHayes\Json\Test;

use BHayes\Json\ComposerJson;
use PHPUnit\Framework\TestCase;

class ComposerJsonTest extends TestCase
{
    private ComposerJson $composerJson;

    public function setUp(): void
    {
        $this->composerJson = new ComposerJson(__DIR__ . '/../composer.json');
    }

    public function testLoad()
    {
        self::markTestIncomplete();
//        file_put_contents('composetest.php', var_export($this->composerJson, true));
        /*BHayes\Json\ComposerJson::__set_state(array(
   'name' => 'b-hayes/json',
   'description' => 'Runs any PHP Class as a command line application',
   'license' => '',
   'authors' =>
  array (
    0 =>
    (object) array(
       'name' => 'b-hayes',
       'email' => 'bradozman@gmail.com',
    ),
  ),
   'scripts' =>
  (object) array(
     'test' => 'phpunit -c test/phpunit.xml',
     'test-report' => 'phpunit -c test/phpunit.xml test --coverage-html test/report',
  ),
   'autoload' =>
  (object) array(
     'psr-4' =>
    (object) array(
       'BHayes\\Json\\' => 'php',
    ),
  ),
   'autoload-dev' =>
  (object) array(
     'psr-4' =>
    (object) array(
       'BHayes\\Json\\Test\\' => 'test',
    ),
  ),
   'bin' =>
  array (
  ),
   'require' =>
  (object) array(
     'php' => '^7.4.3',
     'ext-json' => '*',
     'phpunit/phpunit' => '^9.5',
  ),
))*/
    }
}
