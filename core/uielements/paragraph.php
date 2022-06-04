<?php

class Paragraph extends YolkUIElement
{
    protected $tag = "p";
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
