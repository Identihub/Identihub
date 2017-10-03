<?php

namespace App\Exceptions;


use Illuminate\Contracts\Support\MessageProvider;
use Illuminate\Support\MessageBag;

class ImageShouldBePNGOrJPG extends \Exception implements MessageProvider {
    public $message = "Images should be PNG or JPG";
    public function getMessageBag(){
        return new MessageBag(['error' => $this->message]);
    }
}