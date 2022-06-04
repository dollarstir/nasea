<?php
class Container{
    public static function basic($attributes = '', $content = []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }

        $tag = '<div class="container" '.$attributes.'>';
        $tag .= implode('', $content);
        $tag .= '</div>';
        return trim($tag);

    }

    public static function fluid($attributes = '', $content = []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = '<div class="container-fluid`" '.$attributes.'>';
        $tag .= implode('', $content);
        $tag .= '</div>';

        return trim($tag);
    }
}