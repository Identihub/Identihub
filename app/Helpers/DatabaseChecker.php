<?php

namespace App\Helpers;


class DatabaseChecker
{

    public static function checkIfConnectionWorks()
    {
        try{
            \DB::connection()->getPdo();
            return true;
        }catch (\PDOException $e){
            return false;
        }
    }

}