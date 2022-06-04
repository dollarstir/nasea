<?php
class YolkUIElement
{
    protected $tag = "div";
    protected $contents = [];
    protected $attributes = [];
    protected $closed = false;
    protected $override = false;

    protected static function show(...$args)
    {
        foreach ($args as $key => $value) {
            echo $value;
        }
    }

    public function __construct(
        $contents = [],
        $attributes = [],
        $tag = null
    ) {
        $this->contents = is_string($contents) ? [new Wrapper($contents)] : $contents;
        $this->attributes = $attributes;
        if (!is_null($tag)) {
            $this->tag = $tag;
        }
    }

    protected function attr()
    {
        if (count(array_values($this->attributes)) == 0) {
            return "";
        }

        $attr = '';
        foreach ($this->attributes as $name => $value) {
            $attr .= "$name='$value' ";
        }

        return " " . trim($attr);
    }

    public function render()
    {
        $overrides = [];
        self::show("<{$this->tag}{$this->attr()}>");

        if(!$this->closed) {
            self::show($this->before());
    
            foreach ($this->contents as $key => $content) {
                if(is_a($content, "YolkUIElement")) {
                    if($content->override) {
                        $overrides[] = $content;
                        continue;
                    }
                    $content->render();
                }
            }
    
            self::show($this->after());
            foreach ($overrides as $key => $override) {
                $override->render();
            }
            self::show("</{$this->tag}>");
        }
    }

    protected function before() {}
    protected function after() {}
}
