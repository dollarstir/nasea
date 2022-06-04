<?php

class Slider
{
    public static function basic($attributes = "", $slides = [])
    {
        return self::_all($attributes, false, false, $slides);
    }

    public static function controls($attributes = '', $slides = [])
    {
        return self::_all($attributes, true, false, $slides);
    }


    public static function indicators($attributes = '', $slides = [])
    {
        return self::_all($attributes, false, true, $slides);
    }


    private static function _all(
        $attributes = "",
        $controls = true,
        $indicators = true,
        $slides = []
    ) {
        if (!is_array($slides)) {
            $slides = [$slides];
        }

        $_controls = '';
        $_indicators = '';
        $_items = '';

        if ($controls) {
            $_controls = '
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            ';
        }

        foreach ($slides as $index => $slide) {
            if ($indicators) {
                $_indicators .= '
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $index . '" class="' . ($index ? 'active" aria-current="true"' : '"') . '" aria-label="Slide ' . $index . '"></button>
                ';
    
                if (count($slides) == $index + 1) {
                    $_indicators = '
                        <div class="carousel-indicators">
                        ' . $_indicators . '
                        </div> 
                    ';
                }
            }

            $_items .= $slide;
        }

        return '
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                ' . $_indicators . '
                <div class="carousel-inner">
                    ' . $_items . '
                </div>
                ' . $_controls . '
            </div>
        ';
    }

    public static function item($attributes = "", $image = "", $title = "", $subtitle = "")
    {
        $image = Path::rebase($image);
        $caption = "";

        if ($title != "" || $subtitle != "") {
            $caption = '
                <div class="carousel-caption d-none d-md-block">
                    <h5>' . $title . '</h5>
                    <p>' . $subtitle . '</p>
                </div>
            ';
        }

        return '
            <div class="carousel-item active" ' . $attributes . '>
                <img src="' . $image . '" class="d-block w-100" alt="Image Link: ' . $image . '">
                ' . $caption . '
            </div>
        ';
    }
}
