<?php declare (strict_types = 1);
/*
 * @package SalPlug
 */

namespace SalPlug\Src;

use SalPlug\Src\Template;

final class Init
{
    public function __construct()
    {
        add_action('parse_request', [$this, 'registerEndpoint'], 0);
    }

    public static function registerEndpoint()
    {
        global $wp;

        if ($wp->request === 'sal-plug') {
            Template::display();
            Template::display2();
            Template::display3();
            exit;
        }
    }
}
