<?php

class MetaData extends YolkUIElement
{
    protected $tag = "meta";
    protected $closed = false;

    public function __construct($attributes = [])
    {
        parent::__construct([], $attributes);
    }

    public static function description($description = "") {
        return new MetaData([
            "name" => "description",
            "content" => $description
        ]);
    }

    public static function keyword($keywords = []) {
        if(!is_array($keywords)) {
            $keywords = [$keywords];
        }
        return new MetaData([
            "name" => "keywords",
            "content" => implode(", ", $keywords)
        ]);
    }

    public static function author($author = "") {
        return new MetaData([
            "name" => "author",
            "content" => $author
        ]);
    }

    public static function browser($eq ='X-UA-Compatible', $browser='IE=edge') {
        return new MetaData([
            "http-equiv" => $eq,
            "content" => $browser
        ]);
    }

}
