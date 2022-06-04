<?php

class TagOverride extends YolkUIElement {
    protected $tag = "true";

    public function __construct($child = null)
    {
        parent::__construct([$child]);
        
    }

}