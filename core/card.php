<?php class Card {
    public static function image($src='',$other = '', $content = []){

        if (is_array($content)) {
        } else {
            $content = [$content];
        }

        $tag = '<div class="card" style="width: 18rem;">';
        if (strpos($src, 'http') !== false || strpos($src, 'www') !== false) {
            $tag .='<img src="'.$src.'" class="card-img-top" alt="" '.$other.'>';
        } else {
            $tag .= ' <img src="'.Path::rebase($src).'" class="card-img-top" alt="..." '.$other.'>';
        }
                $tag .=' <div class="card-body">
                 ';
        $tag .=implode('', $content);

        $tag .='</div>
        </div>';

        return trim($tag);

    }

}