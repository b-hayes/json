<?php

namespace BHayes\Json\Test;

use BHayes\Json\Json;
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    public function testDecodeEncode()
    {
        $this->expectException(\JsonException::class);
        Json::decode('"bad: json');

        $jsonString = '{"good": "json"}';
        $object = Json::decode($jsonString);
        self::assertEquals('json', $object->good);

        self::assertEquals($jsonString, Json::encode($object));
        //todo: think of a a way to break encode and make it throw and exception
    }
}
