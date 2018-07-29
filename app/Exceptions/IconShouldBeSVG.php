<?php

namespace App\Exceptions;


use Illuminate\Contracts\Support\MessageProvider;
use Illuminate\Support\MessageBag;

class IconShouldBeSVG extends \Exception implements MessageProvider
{
    public $message = "Icons should be SVG";

    public function getMessageBag()
    {
        return new MessageBag(['error' => $this->message]);
    }
}