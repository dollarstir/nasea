<?php

class Anchor extends YolkUIElement {
    protected $tag = "a";

    public function __construct($link = "", $contents = [], $attributes = [])
    {
        if(is_array($attributes)) {
            $attributes['href'] = Path::rebase($link);
            if (strpos($link, 'http') !== false) {
                $attributes['href'] = $link;
            }

        }

        parent::__construct($contents, $attributes);
    }
}
