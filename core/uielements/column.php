<?php


class Column extends YolkUIElement {
    const SM = 1;
    const MD = 2;
    const LG = 3;
    const XL = 4;
    const XXL = 5;

    protected $tag = "div";
    private $sizes = ["sm", "md", "lg", "xl", "xxl"];

    public function __construct($size = Column::SM, $number = 0, $content = [], $attributes = []) 
    {
        $classes = $attributes['class'] ?? "";
        if($number < 0 || $number > 12 || !is_int($number)) {
            $number = 12;
        }

        if($number == 0) {
            $number = "auto";
        }

        $attributes['class'] = trim("col" . $this->getSize($size) . "-$number " . $classes); 
        
        parent::__construct($content, $attributes);
        
    }

    private function getSize($size) {
        if(isset($this->sizes[$size - 1])) {
            return "-" . $this->sizes[$size - 1];
        }

        return "";
    }
}