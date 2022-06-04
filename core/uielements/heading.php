<?php

class Heading extends YolkUIElement {
    protected $tag = "h";

    public function __construct($level = 1, $contents = [], $attributes = [])
    {
        $this->tag = "{$this->tag}$level";
        parent::__construct($contents, $attributes);
    }
 
}