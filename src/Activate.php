<?php declare (strict_types = 1);
/*
* @package sal-plug
*/

namespace SalPlug\Src;

class Activate
{

    public function __constructor()
    {
        add_rewrite_endpoint('SalPlug', EP_PERMALINK | EP_PAGES, true);
        flush_rewrite_rules();
    }
}
