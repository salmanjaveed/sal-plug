<?php declare (strict_types = 1);
namespace PluginTest\Stuff;

use SalPlug\Src\Init;
use Brain\Monkey\Functions;

class MainTest extends \PluginTestCase
{
    public function testConstruct()
    {
        // arrange
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $_POST = [ 'foo' => '\\\'asas' ];
        // We expect wp_unslash to be called during bootstrap
        Functions\expect('wp_unslash')
            ->once()
            ->with($_POST)
            ->andReturnFirstArg();
        // We expect plugins_url to be called
        Functions\expect('plugins_url')
            ->once()
            ->with( '/dist/', PLUGIN_ABSPATH )
            ->andReturn(true);
        // Fire
        $stub = $this->getMockForAbstractClass( Init::class );
        $stub_class = get_class( $stub );

        // We expect admin_menu action to have been added when calling register
        $this->assertTrue( has_action('parse_request', "{$stub_class}->registerEndpoint()") );
        // Assert
        $this->assertEquals($wp->request, 'sal-plug');
    }
}
