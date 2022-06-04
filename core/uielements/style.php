<?php


class Style extends YolkUIElement {
    protected $tag = "style";
    private $styles = [];

    public function __construct($styles = [])
    {
        $this->styles = $styles;
    }

    protected function before()
    {
        foreach ($this->styles as $tag => $style) {
            echo $tag . "{";
                foreach ($style as $propery => $value) {
                    echo "$propery: $value";
                }
            echo "}";
        }
    }
}