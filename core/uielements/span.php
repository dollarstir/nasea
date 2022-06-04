<?php

class Span extends YolkUIElement {
    protected $tag = "span";
    private $text;

    public function __construct($text = "", $attributes = [], $content = [])
    {
        $this->text = $text;
        parent::__construct($content, $attributes);
    }

    protected function before()
    {
        return $this->text;
    }
}