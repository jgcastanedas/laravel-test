<?php

namespace App\TextValidate\Facades;

use Illuminate\Support\Facades\Facade;


class ValidateText extends Facade{

    protected static function getFacadeValidate(){
        return 'InputValidate';
    }

}

?>