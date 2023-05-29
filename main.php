<?php

class Main_Class {
    public function __construct() {
        $this->call();
    }

    public function call() {
        echo 'Hello!';
    }
}

new Main_Class();