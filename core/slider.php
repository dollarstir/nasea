<?php

class Slider{

    public static function basic($attributes = '', $content = []){
      $num = 0;

       $tag = '<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">';
          foreach ($content as $key ){
            $num++;
              $tag .= '<div class="carousel-item '.($num==1?"active":"").'" '.$attributes.'>
              <img src="'.$key.'" class="d-block w-100" alt="...">
            </div>';
          }
         
      $tag .= '</div>
      </div>';

      return trim($tag);
    }




    public static function controls($attributes = '', $content = []){
      $num = 0;
      

       $tag = '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">';
          foreach ($content as $key ){
            $num++;
              $tag .= '<div class="carousel-item '.($num==1?"active":"").'" '.$attributes.'>
              <img src="'.$key.'" class="d-block w-100" alt="...">
            </div>';
          }
         
      $tag .= '
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
            </div>
            </div>';

      return trim($tag);
    }



    public static function indicator($attributes = '', $content = []){
      $num = 0;
      $num1 =0;
      

       $tag = '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><div class="carousel-indicators">';
          foreach ($content as $key){
          

            $tag .= '
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$num1.'" class="'.($num1==0?"active":"").'" aria-current="'.($num1==0?"true":"").'" aria-label="Slide '.$num1.'"></button>
                        
                     ';

                     $num1++;

          }
          $tag .= ' </div>';
       $tag .=' <div class="carousel-inner">';
          foreach ($content as $key ){
            $num++;
              $tag .= '<div class="carousel-item '.($num==1?"active":"").'" '.$attributes.'>
              <img src="'.$key.'" class="d-block w-100" alt="...">
            </div>';
          }
         
      $tag .= '
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
            </div>
            </div>';

      return trim($tag);
    }


    public static function caption($attributes = '', $content = []){
      $num = 0;
      $num1 =0;
      

       $tag = '<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><div class="carousel-indicators">';
          foreach ($content as $key){
          

            $tag .= '
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$num1.'" class="'.($num1==0?"active":"").'" aria-current="'.($num1==0?"true":"").'" aria-label="Slide '.$num1.'"></button>
                        
                     ';

                     $num1++;

          }
          $tag .= ' </div>';
       $tag .=' <div class="carousel-inner">';
          foreach ($content as $key ){
            $num++;
              $tag .= '<div class="carousel-item '.($num==1?"active":"").'" '.$attributes.'>
              <img src="'.$key.'" class="d-block w-100" alt="...">
            </div>';
          }
         
      $tag .= '
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
            </div>
            </div>';

      return trim($tag);
    }



    public static function crossfade($attributes = '', $content = []){
      $num = 0;
      

       $tag = '<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">';
          foreach ($content as $key ){
            $num++;
              $tag .= '<div class="carousel-item '.($num==1?"active":"").'" '.$attributes.'>
              <img src="'.$key.'" class="d-block w-100" alt="...">
            </div>';
          }
         
      $tag .= '
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
            </div>
            </div>';

      return trim($tag);
    }
}