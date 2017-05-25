<?php

namespace App\Libraries;

use Illuminate\Http\Request;

class GeneralLibrary
{

    public function __construct(Request $request)
    {

    }

    public function randomString()
    {
        return str_random(60);
    }

}