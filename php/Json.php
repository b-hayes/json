<?php


namespace BHayes\Json;


class Json
{
    /**
     * Returns valid json string or throws JsonException.
     *
     * @param $mixed
     * @return string
     * @throws \JsonException
     */
    public static function encode($mixed): string
    {
        return json_encode($mixed, JSON_THROW_ON_ERROR);
    }

    /**
     * Returns json in its decoded form or throws JsonException.
     *
     * @param string $jsonString
     * @return mixed
     * @throws \JsonException
     */
    public static function decode(string $jsonString)
    {
        return json_decode($jsonString, false, 512, JSON_THROW_ON_ERROR);
    }

    public function __toString()
    {
        return self::encode($this);
    }

    /**
     * Applies any properties from decoding the json string to an instance.
     *
     * @param string $jsonString
     * @param object $instance
     * @throws \JsonException
     */
    public static function loadJsonString(string $jsonString, object &$instance)
    {
        $decoded = Json::decode($jsonString);
        foreach ($decoded as $key => $value){
            $instance->{$key} = $value;
        }
    }
}
