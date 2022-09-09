<?php

namespace BHayes\Test;

use BHayes\Json\ComposerJson;
use PHPUnit\Framework\TestCase;

class ComposerJsonTest extends TestCase
{
    public function testLoadAndSave()
    {
        $composerJson = new ComposerJson(__DIR__ . '/ComposerJsonTest.json');
        $composerJson->__save(__DIR__ . '/../temp/ComposerJsonTest.json');
        $reloaded = new ComposerJson(__DIR__ . '/../temp/ComposerJsonTest.json');
        self::assertEquals(get_object_vars($composerJson), get_object_vars($reloaded));
    }
}
