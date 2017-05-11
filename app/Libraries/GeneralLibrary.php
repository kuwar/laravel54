<?php

namespace App\Libraries;

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