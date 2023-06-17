<?php
class Example_Class {
    public function set_my_option(): bool {
        return update_option( 'my_option', 'my_value' );
    }

    /**
     * PHPDoc.
     */
    public function get_my_option(): string {
        return get_option( 'my_option' );
    }
}