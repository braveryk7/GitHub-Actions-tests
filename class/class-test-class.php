<?php
class Test_Class {
    public function set_my_option(): bool {
        return update_option( 'my_option', 'my_value' );
    }
}