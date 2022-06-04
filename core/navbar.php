<?php
class Navbar{

    public static function basiclight($attributes = '',$brand='', $content = []){
        $tag= '<nav class="navbar navbar-expand-lg navbar-dark bg-dark" '.$attributes.'>
        <div class="container-fluid">

            '.$brand.'
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
              
            $tag .=implode('', $content);
              
              
          $tag .= '  </ul>
            
          </div>
        </div>
      </nav>';

      return $tag;
    }


    public static function Navbrand($brandlink='',$content=[]){
      if (strpos($brandlink, 'http') !== false || strpos($brandlink, 'www') !== false) {
        $tag = ' <a class="navbar-brand" href="'.$brandlink.'">';
      }
      else{
        $tag= ' <a class="navbar-brand" href="'.Path::rebase($brandlink).'">';

      }
      $tag .=implode('', $content);
      $tag .='</a>';
      return trim($tag);

    }

    public static function Navbasic($attributes = '', $content = []){

      foreach($content as $key => $value){
        $tag ='';
        
        if (strpos($value, 'http') !== false || strpos($value, 'www') !== false) {
          $tag .= '<li class="nav-item" '.$attributes.'><a class="nav-link"  href="'.$value.'">'.$key.'</a></li>';
        }
        else{
          $tag .= '<li class="nav-item" '.$attributes.'><a class="nav-link"  href="'.Path::rebase($value).'">'.$key.'</a></li>';
  
        }

      }
      $tag .= '';

      return trim($tag);
    }

    public static function Navactive($attributes = '', $content = []){

      foreach($content as $key => $value){
        $tag = '';
        $tag .= ' <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="'.$value.'">'.$key.'</a>
      </li>';
      }
      $tag .='';

      return trim($tag);
    }


    public static function Navdropdown($attributes = '',$title='', $content = []){

     
      
        $tag = '<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            '.$title.'
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
            foreach($content as $key => $value){
              $tag .= '<li><a class="dropdown-item" href="'.$value.'">'.$key.'</a></li>';
            }

         $tag .= '</ul>
        </li>';
     

      return trim($tag);
    }

    public static function sidebar($attributes='', $content = []){

      return '<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple"
            aria-current="true"
          >
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Webiste traffic</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-lock fa-fw me-3"></i><span>Password</span></a
          >
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a
          >
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
          >
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-globe fa-fw me-3"></i><span>International</span></a
          >
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-building fa-fw me-3"></i><span>Partners</span></a
          >
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a
          >
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
          >
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
          >
        </div>
      </div>
    </nav>';
    }
}