<?php

class Link extends YolkUIElement {
    protected $tag = "link";
    protected $closed = false;

    public function __construct($attributes = [])
    {
        parent::__construct([], $attributes);
    }


    public static function css($link = "") {
        return new Link([
            "href" => $link,
            "rel" => "stylesheet",
            "type" => "text/css"
        ]);
    }

    public static function favicon($link = "") {
        return new Link([
            "href" => $link,
            "rel" => "shortcut icon",
            "type" => "image/x-icon"
        ]);
    }
}

