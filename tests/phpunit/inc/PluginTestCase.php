<?php
use \PHPUnit\Framework\TestCase;
use \Brain\Monkey;

class PluginTestCase extends \PHPUnit\Framework\TestCase {

    protected function setUp(): void {
        parent::setUp();
        Monkey\setUp();
    }

    protected function tearDown(): void {
        Monkey\tearDown();
        parent::tearDown();
    }
}
