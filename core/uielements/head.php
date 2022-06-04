<?php

class Head extends YolkUIElement
{
    protected $tag = "head";

    protected function after()
    {
        Link::css("ui/css/bootstrap.min.css")->render();
        return;
    }
}
