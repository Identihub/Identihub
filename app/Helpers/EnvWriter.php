<?php

namespace App\Helpers;


class EnvWriter
{

    protected $environmentFilePath;

    /**
     * EnvWriter constructor.
     * @param $environmentFilePath
     */
    public function __construct($environmentFilePath)
    {
        $this->environmentFilePath = $environmentFilePath;
    }

    /**
     * Write a new environment file with the given key.
     *
     * @param  string  $key
     * @return void
     */
    public function writeNewEnvironmentFileWith($key, $value)
    {
        file_put_contents($this->environmentFilePath, preg_replace(
            "/.*" . $key . ".*/",
            $key . '=' . $value,
            file_get_contents($this->environmentFilePath)
        ));
    }

}