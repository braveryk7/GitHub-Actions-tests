<?php

use Yoast\WPTestUtils\WPIntegration\TestCase;

class Github_Actions_Test extends TestCase {
    private $instance;

    public function set_up(): void {
        parent::set_up();
        require_once 'github-actions.php';
        $this->instance = new Github_Actions();
    }

    public function test_call() {
        ob_start();
        $this->instance->call();
        $actual = ob_get_clean();
        $this->assertSame( '<script>console.log("Hello World!");</script>', $actual );
    }
}