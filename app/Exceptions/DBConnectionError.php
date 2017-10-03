<?php

namespace App\Exceptions;


use Illuminate\Contracts\Support\MessageProvider;
use Illuminate\Support\MessageBag;

class DBConnectionError extends \Exception implements MessageProvider {
    public $message = "Your data doesn't work with the database";
    public function getMessageBag(){
        return new MessageBag(['error' => $this->message]);
    }
}