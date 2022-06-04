<?php

class h{
    public static function h1($tag = '',  $other = ''){
        switch ($tag){
            case 's':
                echo '<h1 '.$other.'>';
                break;
            case 'e':
                echo '</h1>';
                break;
        }
    }
    public static function h2($tag = '',  $other = ''){
        switch ($tag){
            case 's':
                echo '<h2 '.$other.'>';
                break;
            case 'e':
                echo '</h2>';
                break;
        }
    }
    public static function h3($tag = '',  $other = ''){
        switch ($tag){
            case 's':
                echo '<h3 '.$other.'>';
                break;
            case 'e':
                echo '</h3>';
                break;
        }
    }
    public static function h4($tag = '',  $other = ''){
        switch ($tag){
            case 's':
                echo '<h4 '.$other.'>';
                break;
            case 'e':
                echo '</h4>';
                break;
        }
    }
    public static function h5($tag = '',  $other = ''){
        switch ($tag){
            case 's':
                echo '<h5 '.$other.'>';
                break;
            case 'e':
                echo '</h5>';
                break;
        }
    }
    public static function h6($tag = '',  $other = ''){
        switch ($tag){
            case 's':
                echo '<h6 '.$other.'>';
                break;
            case 'e':
                echo '</h6>';
                break;
        }
    }
}