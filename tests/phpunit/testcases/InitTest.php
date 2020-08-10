<?php
namespace Tests\PhpUnit;

use \PluginTestCase;

class InitTest extends \PluginTestCase
{

    public function testInit()
    {
         new \SalPlug\Src\Init();
         self::assertTrue(has_action('parse_request', '\SalPlug\Src\Init->registerEndpoint()'));
    }
}
