<?php

class Source extends YolkUIElement {
    protected $tag = "source";

    public function __construct($link = "", $type = "", $attributes = []) {
        if(is_array($attributes)) {
            $attributes['src'] = Path::rebase($link);
            if (strpos($link, 'http') !== false) {
                $attributes['src'] = $link;
            }

            $attributes['type'] = $type;
        }

        parent::__construct([], $attributes);
    }
}