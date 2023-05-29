<?php
/**
 * Plugin Name: Admin Bar Tools
 */

class Github_Actions {
    public function __construct() {
        add_action( 'shutdown', [ $this, 'call' ] );
    }

    public function call() {
        echo '<script>console.log(' . wp_json_encode( 'Hello World!' ) . ');</script>';
    }
}

new Github_Actions();