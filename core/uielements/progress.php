<?php

class Progress extends YolkUIElement {
    protected $tag = "progress";

    public function __construct($value = 0, $max = 0, $attributes = [], $contents = []) {
        if (is_array($attributes)) {
            $attributes['value'] = $value;
            $attributes['max'] = $max;
        }
        parent::__construct($contents, $attributes);
    }
}