<?php


namespace BHayes\Json;


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
        if (is_file($filename)) {
            $jsonString = file_get_contents($filename);
            if ($jsonString === false) {
                throw new \Exception("$filename could not be loaded.");
            }
            Json::loadJsonString($jsonString, $this);
        }

        $this->__fileName = $filename;
    }

    public function __toString()
    {
        return Json::encode($this);
    }

    public function __save()
    {
        file_put_contents($this->__fileName, Json::encode($this));
    }
}
