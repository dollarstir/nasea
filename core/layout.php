<?php 

class Layout{

    public static function row($attributes='', $content = []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = '<div class="row "'.$attributes.'>';
        $tag .= implode('',$content);
        $tag .='</div>';

        return trim($tag);
       
    }

    
    public static function cols($number,$other = '', $content = []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
                $tag ='<div class="col-sm-'.$number.' " '.$other.'>';
                $tag .= implode('', $content);
                $tag .= '</div>';
            
            return trim($tag);
    }
    public static function colm($number, $other = '', $content= []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
                $tag ='<div class="col-md-'.$number.'" '.$other.'>';
                $tag .= implode('', $content);
              
                    
                $tag .= '</div>';

                return trim($tag);
                
        
    }
    public static function collg($number, $other = '',$content = []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
           
                $tag= '<div class="col-lg-'.$number.'"  '.$other.'>';
             
                $tag .= implode('', $content);
                $tag .= '</div>';
                return trim($tag);
          
        
    }
    public static function colx($number, $other = '', $content = []){
       
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
             $tag = '<div class="col-xl-'.$number.'" '.$other.'>';
       
            $tag .= implode('', $content);

            $tag .= '</div>';

            return trim($tag);
           
       
    }
    public static function colxx($number, $other = '', $content = []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
                $tag ='<div class="col-xxl-'.$number.'" '.$other.'>';
                $tag .= implode('', $content);
                $tag .= '</div>';
                
                return trim($tag);
        
    }

    public static function col($number, $other = '', $content = []){
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
                $tag= '<div class="col-'.$number.'" '.$other.'>';
                $tag .= implode('', $content);
                $tag .='</div>';
               
    }
}