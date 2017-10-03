<?php
/**
 * Created by PhpStorm.
 * User: aleksanderkoko
 * Date: 29/08/2017
 * Time: 18:10
 */

namespace App\Exceptions;


use Illuminate\Contracts\Support\MessageProvider;
use Illuminate\Support\MessageBag;

class UserDoesntExist implements MessageProvider
{

    /**
     * Get the messages for the instance.
     *
     * @return \Illuminate\Contracts\Support\MessageBag
     */
    public function getMessageBag()
    {
        return new MessageBag(["These credetials do not match our records."]);
    }
}