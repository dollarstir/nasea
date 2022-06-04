<?php

class Bar{

    public static function basic($min='0',$max='100',$current='0',$attributes=''){

            return '<div class="progress">
            <div class="progress-bar" role="progressbar" style="width: '.$current.'%" aria-valuenow="'.$current.'" aria-valuemin="'.$min.'" aria-valuemax="'.$max.'" '.$attributes.'></div>
          </div>';
    }

    public static function labelprogress($min='0',$max='100',$current='0',$label,$attributes=''){
        return '
        <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="'.$current.'" style="width:'.$current.'%" aria-valuemin="'.$min.'" aria-valuemax="'.$max.'"  '.$attributes.'>'.$label.'</div>
</div>';
    }
}