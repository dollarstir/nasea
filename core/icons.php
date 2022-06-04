<?php
class Icons{

    public static function far($name='', $size = '',$class = '', $id = ''){
        if(empty($size) ){
            return '<i class="fa fa-'.$name.'" id="'.$id.'" class="'.$class.'"></i>';

        }
        else{
            return '<i class="fa fa-'.$name.'" style="font-size:'.$size.'" id="'.$id.'" class="'.$class.'"></i>';

        }
    }

    public static function fas($name='', $size = '',$class = '', $id = ''){
        if(empty($size) ){
            return '<i class="fa fa-'.$name.'" id="'.$id.'" class="'.$class.'"></i>';

        }
        else{
            return '<i class="fa fa-'.$name.'" style="font-size:'.$size.'" id="'.$id.'" class="'.$class.'"></i>';

        }
    }
}