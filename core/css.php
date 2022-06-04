<?php

     function id($idname = '', $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = '#'.$idname.'{';
         foreach ($content as $key) {
             $tag .= $key;
         }
         $tag .= '}';

         return trim($tag);
     }

     function dot($classname = '', $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = '.'.$classname.'{';
         foreach ($content as $key) {
             $tag .= $key;
         }
         $tag .= '}';

         return trim($tag);
     }

     function widget($widgetname = '', $content = [])
     {
         if (is_array($content)) {
         } else {
             $content = [$content];
         }
         $tag = $widgetname.'{';
         foreach ($content as $key) {
             $tag .= $key;
         }
         $tag .= '}';

         return trim($tag);
     }

     function yolkcss($content = '')
     {
         //  if (is_array($content)) {
         //  } else {
         //      $content = [$content];
         //  }
         $tag = '<style>';
         $tag .= include $content;
         $tag .= '</style>';

         return trim($tag);
     }

     function export($designs)
     {
         if (is_array($designs)) {
         } else {
             $designs = [$designs];
         }
         $tag = '';
         foreach ($designs as $design) {
             $tag .= $design;
         }

         return trim($tag);
     }
