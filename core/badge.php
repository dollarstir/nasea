<?php

class Badge{

    public static function basic($type='',$message='0',$other=''){
        return '<span class="badge bg-'.$type.'" '.$other.'>'.$message.'</span>

        ';
    }
    public static function topleft($type='',$message='0',$other=''){
        return '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-'.$type.'" '.$other.'>
            '.$message.'
        <span class="visually-hidden"></span>
      </span>';

    }

    public static function topcircle($type='',$other=''){
        return '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-'.$type.' border border-light rounded-circle" '.$other.'>
           
        <span class="visually-hidden"></span>
      </span>';

    }



}

