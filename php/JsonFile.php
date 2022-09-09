<?php


namespace BHayes\Json;


use function PHPUnit\Framework\isFinite;

class JsonFile
{
    private string $__fileName;

    /**
     * JsonFile constructor.
     *
     * @throws \JsonException
     * @throws \Exception
     */
    public function __construct(string $filename)
    {
        if (!is_file($filename)) throw new \JsonException("$filename is not a file.");

        $jsonString = file_get_contents($filename);
        if ($jsonString === false) throw new \JsonException("$filename could not be loaded.");

        Json::loadJsonString($jsonString, $this);
        $this->__fileName = $filename;
    }

    public function __toString()
    {
        return Json::encode($this);
    }

    public function __save(string $fileName = null)
    {
        $saveAs = $fileName ?: $this->__fileName;
        file_put_contents($saveAs, Json::encode($this));
    }
}
