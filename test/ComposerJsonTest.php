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

    public function testLoadAndSave()
    {
        $composerJson = new ComposerJson(__DIR__ . '/ComposerJsonTest.json');
        $composerJson->__save(__DIR__ . '/../temp/ComposerJsonTest.json');
        $reloaded = new ComposerJson(__DIR__ . '/../temp/ComposerJsonTest.json');
        self::assertEquals(get_object_vars($composerJson), get_object_vars($reloaded));
    }
}
