<?php
class meta{
    
    public static function description($description=''){
        return '<meta name="description" content="'.$description.'">';
    }
    public static function keywords($keywords=''){
        return '<meta name="keywords" content="'.$keywords.'">';
    }
    public static function author($author=''){
        return '<meta name="author" content="'.$author.'">';
    }
    public static function charset($charset='UTF-8'){
        return '<meta charset="'.$charset.'">';
    }
    public static function viewport($viewport='width=device-width, initial-scale=1.0'){
        return '<meta name="viewport" content="'.$viewport.'">';
    }
    public static function browser($eq ='X-UA-Compatible',$browser='IE=edge'){
        return '<meta http-equiv="'.$eq.'" content="'.$browser.'">';
    }

    public static function custom($name ='',$content=''){
        return '<meta name="'.$name.'" content="'.$content.'">';
    }
  
}

// class Meta extends YolkUIElement {

//     public function render() {
//         // self::show("<meta>")
//     }

// }

?>