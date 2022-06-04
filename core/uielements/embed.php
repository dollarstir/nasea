<?php

class Embed extends YolkUIElement {
    protected $tag = "embed";
    protected $closed = true;

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