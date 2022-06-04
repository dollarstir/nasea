<?php

class Audio extends YolkUIElement {
    protected $tag = "audio";
    private $link = "";
    private $type = "";

    public function __construct($link = "", $attributes = [], $type = "")
    {
        $this->link = $link;
        $this->type = $type;

        parent::__construct([], $attributes);
    }

    public function render() {
        echo "<{$this->tag}{$this->attr()} controls>";
        echo "<source src='{$this->link}' type='{$this->type}'>";
        echo "</{$this->tag}>";
    }
}