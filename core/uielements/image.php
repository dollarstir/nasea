<?php

class Image extends YolkUIElement {
    protected $tag = "img";

    public function __construct($link = "", $attributes = [])
    {
        if(is_array($attributes)) {
            $attributes['src'] = Path::rebase($link);
            if (strpos($link, 'http') !== false) {
                $attributes['src'] = $link;
            }

        }

        parent::__construct([], $attributes);        
    }
}