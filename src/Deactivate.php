<?php declare (strict_types = 1);
/*
* @package SalPlug
*/

namespace SalPlug\Src;

class Deactivate
{
    public function __construct()
    {
        flush_rewrite_rules();
    }
}
