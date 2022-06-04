<?php

class Area extends YolkUIElement
{
    protected $tag = "area";
    protected $closed = true;

    public function __construct($link = "", $shape = "", $coordinates = "", $attributes = [])
    {
        if (is_array($attributes)) {
            $attributes['href'] = Path::rebase($link);
            if (strpos($link, 'http') !== false) {
                $attributes['href'] = $link;
            }

            $attributes['shape'] = $shape;
            $attributes['coords'] = $coordinates;
        }

        parent::__construct([], $attributes);
    }
}
