<?php

class Track extends YolkUIElement {
    protected $tag = "track";
    protected $closed = true;

    public function __construct($attributes = []) {
        parent::__construct([], $attributes);
    }
}