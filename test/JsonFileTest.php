<?php /** @noinspection ALL */

namespace BHayes\Test;

use BHayes\Json\Json;
use BHayes\Json\JsonFile;
use PHPUnit\Framework\TestCase;

class JsonFileTest extends TestCase
{
    private string $testFile;

    public function setUp(): void
    {
        $this->testFile =  __DIR__ . '/../temp/test-file.json';
    }
    public function testLoadAndSave(): void
    {
        $this->testFile = __DIR__ . '/../temp/test-file.json';
        file_put_contents($this->testFile, '{"aBool": true}');
        $jsonFile = new JsonFile($this->testFile);

        self::assertTrue($jsonFile->aBool === true);

        $jsonFile->saveThis = 'some value';
        $jsonFile->__save();
        $jsonFile = new JsonFile($this->testFile);
        self::assertTrue('some value' === $jsonFile->saveThis);
    }
}
