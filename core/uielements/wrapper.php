<?php

class Wrapper extends YolkUIElement {
    private $element = "";

    public function __construct($element = "")
    {
        $this->element = $element;
    }

    public function render() {
        echo $this->element;
    }
}