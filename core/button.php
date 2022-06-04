<?php

class Button {

    public static function basic($type='',$other='',$content= []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = '<button type="button" class="btn btn-'.$type.'"  '.$other.'>';
         $tag .= implode('', $content);
         $tag .= '</button>';

         return trim($tag);

    }

    public static function large($type='',$other='',$content= []){

        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = '<button type="button" class="btn btn-'.$type.' btn-lg"  '.$other.'>';
         $tag .= implode('', $content);
         $tag .= '</button>';

         return trim($tag);


    }


    public static function small($type='',$other='',$content= []){

        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = '<button type="button" class="btn btn-'.$type.' btn-sm"  '.$other.'>';
         $tag .= implode('', $content);
         $tag .= '</button>';
         return trim($tag);


    }


    public static function outline($type='',$other='',$content= []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = '<button type="button" class="btn btn-outline-'.$type.'"  '.$other.'>';
         $tag .= implode('', $content);
         $tag .= '</button>';
         return trim($tag);

    }
}