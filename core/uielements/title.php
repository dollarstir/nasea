<?php

class Title extends YolkUIElement {
    protected $tag = "title";
    private $title = "Yolk UI";

    public function __construct($title) 
    {
        $this->title = $title;
    }

    protected function parse() {
        return $this->title;
    } 
}