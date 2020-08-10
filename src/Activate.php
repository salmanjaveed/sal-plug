<?php declare (strict_types = 1);
/*
* @package SalPlug
*/

namespace SalPlug\Src;

class Activate
{

    public function __constructor()
    {
        flush_rewrite_rules();
    }
}
