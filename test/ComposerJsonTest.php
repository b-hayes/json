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
        new ComposerJson(__DIR__ . '/ComposerJsonTest.json');
    }
}
