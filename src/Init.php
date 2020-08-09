<?php declare (strict_types = 1);
/*
 * @package sal-plug
 */

namespace SalPlug\Src;

final class Init
{
    public function __construct()
    {
        add_action('init', [$this, 'salPlugEndpoint']);
        add_action('parse_request', [$this, 'registerEndpoint'], 0);
    }

    public static function salPlugEndpoint()
    {
        add_rewrite_endpoint('sal-plug', EP_PERMALINK | EP_PAGES, true);
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
