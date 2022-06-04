<?php
class component{

    public static function accordion($data=[]){
        // foreach ($initialdata as $heading => $content){
            
        // }
        $num = 0;
        $tag = '<div class="accordion" id="accordionExample">';
        foreach ($data as $h => $c){
            $num = $num + 1;

            $tag .= '<div class="accordion-item">
            <h2 class="accordion-header" id="heading'.$num.'">
              <button class="accordion-button '.($num==1?"":"collapsed").'" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$num.'" aria-expanded="'.($num==1?"true":"false").'" aria-controls="collapse'.$num.'">
                '.$h.'
              </button>
            </h2>
            <div id="collapse'.$num.'" class="accordion-collapse collapse '.($num==1?"show":" ").'" aria-labelledby="heading'.$num.'" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                '.$c.'
              </div>
            </div>
          </div>';
            // var_dump();

            // if(array_values($data)[0]){
            //     $tag .='
            
            //     <div class="accordion-item">
            //     <h2 class="accordion-header" id="headingOne">
            //         <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            //         '.$h.'
            //         </button>
            //     </h2>
            //     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            //         <div class="accordion-body">
            //         '.$c.'
            //         </div>
            //     </div>
            //     </div>
            
            
            
            // ';
            // }else{
            // $tag .='
           
            //     <div class="accordion-item">
            //     <h2 class="accordion-header" id="'.$num.'">
            //         <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ac'.$num.'" aria-expanded="false" aria-controls="ac'.$.'">
            //         '.$h.'
            //         </button>
            //     </h2>
            //     <div id="'.$h.'" class="accordion-collapse collapse" aria-labelledby="'.$num.'" data-bs-parent="#accordionExample">
            //         <div class="accordion-body">
            //         '.$c.'
            //         </div>
            //     </div>
            //     </div>
            
            
            
            // ';

            // }
        }
    $tag .='</div>';
    return $tag;

    }
    public static function basicalert($message,$type,$class='',$other=''){
        return '
        <div class="mb-3">
             <div class="alert alert-'.$type.' '.$class.'" role="alert" '.$other.'>
                '.$message.'
           </div>
        </div>';
    }
}