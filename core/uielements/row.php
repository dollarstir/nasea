<?php

class Row extends YolkUIElement {
    protected $tag = "div";

    public function __construct($contents = [], $attributes = [])
    {
        $classes = $attributes['class'] ?? '';
        $attributes['class'] = trim("row " . $classes);

        parent::__construct($contents, $attributes);
    }
}