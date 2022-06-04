<?php

class el
{
    public static function p($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <p '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</p>
        ';

        return trim($tag);
    }

    public static function a($href = '', $attributes = '', $content = ['link here'])
    {
        // var_dump(strpos($href, 'http') !== false);
        if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
            $tag = ' <a href="'.($href).'"  '.$attributes.'>';
        } else {
            $tag = ' <a href="'.Path::rebase($href).'" '.$attributes.'>';
        }
        if (is_array($content)) {
        } else {
            $content = [$content];
        }

        // foreach ($content as $result) {
        $tag .= implode('', $content);
        // }
        $tag .= '</a>
        ';

        return trim($tag);
    }

    public static function nav($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <nav '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</nav>
        ';

        return trim($tag);
    }

    public static function html($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <html '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</html>
        ';

        return trim($tag);
    }

    public static function head($content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <head>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</head>
        ';

        return trim($tag);
    }

    public static function title($content = '')
    {
        // if (is_array($content)) {
        // } else {
        //     $content = [$content];
        // }
        $tag = ' <title>';
        $tag .= $content;

        // foreach ($content as $result) {

        // }
        $tag .= '</title>
        ';

        return trim($tag);
    }

    public static function body($content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <body>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</body>
        ';

        return trim($tag);
    }

    public static function abbr($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <abbr '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</abbr>
        ';

        return trim($tag);
    }

    public static function acronym($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <acronym '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</acronym>
        ';

        return trim($tag);
    }

    public static function address($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <address '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</address>
        ';

        return trim($tag);
    }

    public static function applet($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <applet '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</applet>
        ';

        return trim($tag);
    }

    public static function area($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <area '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</area>
        ';

        return trim($tag);
    }

    public static function article($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <article '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</article>
        ';

        return trim($tag);
    }

    public static function aside($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <aside '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</aside>
        ';

        return trim($tag);
    }

    public static function audio($source = '', $attributes = '', $type = '')
    {
        $tag = ' <audio '.$attributes.' controls>';

        if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
            $tag .= '<source src="'.$source.'" type="'.$type.'">';
        } else {
            $tag .= '<source src="'.Path::rebase($source).'" type="'.$type.'">';
        }
        $tag .= ' </audio>
        ';

        return $tag;
    }

    public static function b($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <b '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</b>
        ';

        return trim($tag);
    }

    public static function base($href = '', $attributes = '')
    {
        if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
            return ' <base '.$attributes.' href="'.$href.'">';
        } else {
            return ' <base '.$attributes.' href="'.Path::rebase($href).'">';
        }
    }

    public static function bdi($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <bdi '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</bdi>
        ';

        return trim($tag);
    }

    public static function bdo($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <bdo '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</bdo>
        ';

        return trim($tag);
    }

    public static function big($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <big '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</big>
        ';

        return trim($tag);
    }

    public static function blockquote($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <blockquote '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</blockquote>
        ';

        return trim($tag);
    }

    public static function br($times = 1)
    {
        $tag = '';
        for ($i = 1; $i <= $times; ++$i) {
            $tag .= '<br>';
        }
        $tag .= '';

        return trim($tag);
    }

    public static function break($times = 1)
    {
        $tag = '';
        for ($i = 1; $i <= $times; ++$i) {
            $tag .= '<br>';
        }
        $tag .= '';

        return trim($tag);
    }

    public static function button($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <button '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</button>
        ';

        return trim($tag);
    }

    public static function canvas($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <canvas '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</canvas>
        ';

        return trim($tag);
    }

    public static function caption($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <caption '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</caption>
        ';

        return trim($tag);
    }

    public static function center($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <center '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</center>
        ';

        return trim($tag);
    }

    public static function cite($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <cite '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</cite>
        ';

        return trim($tag);
    }

    public static function code($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <code '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</code>
        ';

        return trim($tag);
    }

    public static function col($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <col '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</col>
        ';

        return trim($tag);
    }

    public static function colgroup($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <colgroup '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</colgroup>
        ';

        return trim($tag);
    }

    public static function data($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <data '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</data>
        ';

        return trim($tag);
    }

    public static function datalist($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <datalist '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</datalist>
        ';

        return trim($tag);
    }

    public static function dd($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <dd '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</dd>
        ';

        return trim($tag);
    }

    public static function del($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <del '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</del>
        ';

        return trim($tag);
    }

    public static function details($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <details '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</details>
        ';

        return trim($tag);
    }

    public static function dfn($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <dfn '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</dfn>
        ';

        return trim($tag);
    }

    public static function dialog($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <dialog '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</dialog>
        ';

        return trim($tag);
    }

    public static function dir($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <dir '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</dir>
        ';

        return trim($tag);
    }

    public static function divi($attributes = '', $content = [''])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <div '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</div>
        ';

        return trim($tag);
    }

    public static function div($attributes = '', $content = [''])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <div '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</div>
        ';

        return trim($tag);
    }

    public static function container($attributes = '', $content = [''])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <div '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</div>
        ';

        return trim($tag);
    }

    public static function dl($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <dl '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</dl>
        ';

        return trim($tag);
    }

    public static function dt($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <dt '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</dt>
        ';

        return trim($tag);
    }

    public static function em($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <em '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</em>
        ';

        return trim($tag);
    }

    public static function embed($source, $attributes = '')
    {
        if (strpos($source, 'http') !== false || strpos($source, 'www') !== false) {
            return ' <embed src="'.$source.'" '.$attributes.'>';
        } else {
            return ' <embed src="'.Path::rebase($source).'" '.$attributes.'>';
        }
    }

    public static function fieldset($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <fieldset '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</fieldset>
        ';

        return trim($tag);
    }

    public static function figure($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <figure '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</figure>
        ';

        return trim($tag);
    }

    public static function figcaption($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <figcation '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</figcaption>
        ';

        return trim($tag);
    }

    public static function font($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <font '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</font>
        ';

        return trim($tag);
    }

    public static function footer($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <footer '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</footer>
        ';

        return trim($tag);
    }

    public static function form($action = '', $method = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <form action="'.$action.'" method="'.$method.'" '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</form>
        ';

        return trim($tag);
    }

    public static function frame($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <frame '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</frame>
        ';

        return trim($tag);
    }

    public static function frameset($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <frameset '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</frameset>
        ';

        return trim($tag);
    }

    public static function h1($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <h1 '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</h1>
        ';

        return trim($tag);
    }

    public static function h2($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <h2 '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</h2>
        ';

        return trim($tag);
    }

    public static function h3($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <h3 '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</h3>
        ';

        return trim($tag);
    }

    public static function h4($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <h4 '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</h4>
        ';

        return trim($tag);
    }

    public static function h5($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <h5 '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</h5>
        ';

        return trim($tag);
    }

    public static function h6($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <h6 '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</h6>
        ';

        return trim($tag);
    }

    public static function header($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <header '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</header>
        ';

        return trim($tag);
    }

    public static function hr($times = 1)
    {
        $tag = '';
        for ($i = 1; $i <= $times; ++$i) {
            $tag .= '<hr>';
        }
        $tag .= '';

        return trim($tag);
    }

    public static function hruler($times = 1)
    {
        $tag = '';
        for ($i = 1; $i <= $times; ++$i) {
            $tag .= '<hr>';
        }
        $tag .= '';

        return trim($tag);
    }

    public static function i($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <i '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</i>
        ';

        return trim($tag);
    }

    public static function iframe($source = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <iframe scr='.$source.' '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</iframe>
        ';

        return trim($tag);
    }

    public static function img($source = '', $loadingtype = 'lazy', $attributes = '')
    {
        // $source =trim($source);
        if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
            $tag = '<img src="'.$source.'" loading="'.$loadingtype.'" '.$attributes.' />';
        } else {
            $tag = ' <img  src="'.Path::rebase($source).'" loading="'.$loadingtype.'" '.$attributes.'/>';
        }

        return $tag;
    }

    public static function image($source = '', $loadingtype = 'lazy', $attributes = '')
    {
        if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
            $tag = '<img src="'.$source.'" loading="'.$loadingtype.'" '.$attributes.' />';
        } else {
            $tag = ' <img  src="'.Path::rebase($source).'" loading="'.$loadingtype.'" '.$attributes.'/>';
        }

        return $tag;
    }

    public static function pic($source = '', $loadingtype = 'lazy', $attributes = '')
    {
        if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
            $tag = '<img src="'.$source.'" loading="'.$loadingtype.'" '.$attributes.' />';
        } else {
            $tag = ' <img  src="'.Path::rebase($source).'" loading="'.$loadingtype.'" '.$attributes.'/>';
        }

        return $tag;
    }

    public static function photo($source = '', $loadingtype = 'lazy', $attributes = '')
    {
        if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
            $tag = '<img src="'.$source.'" loading="'.$loadingtype.'" '.$attributes.' />';
        } else {
            $tag = ' <img  src="'.Path::rebase($source).'" loading="'.$loadingtype.'" '.$attributes.'/>';
        }

        return $tag;
    }

    public static function input($type = 'text', $name = '', $class = '', $value = '', $attributes = '')
    {
        return ' <input type="'.$type.'" name="'.$name.'" class="'.$class.'"  value="'.$value.'" '.$attributes.'>';
    }

    public static function ins($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <ins '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</ins>
        ';

        return trim($tag);
    }

    public static function kbd($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <kbd '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</kbd>
        ';

        return trim($tag);
    }

    public static function keyboard($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <kbd '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</kbd>
        ';

        return trim($tag);
    }

    public static function label($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <label '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</label>
        ';

        return trim($tag);
    }

    public static function legend($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <legend '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</legend>
        ';

        return trim($tag);
    }

    public static function li($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <li '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</li>
        ';

        return trim($tag);
    }

    public static function linkatom($href = '', $attributes = '')
    {
        // return '<link rel="alternate" href="'.$href.'" type="application/atom+xml" title="Atom" '.$attributes.'>';
        if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
            return '<link rel="alternate" href="'.$href.'" type="application/atom+xml" title="Atom" '.$attributes.'>';
        } else {
            return '<link rel="alternate" href="'.Path::rebase($href).'" type="application/atom+xml" title="Atom" '.$attributes.'>';
        }
    }

    public static function linkcss($href = '', $attributes = '')
    {
        // return '<link rel="stylesheet" href="'.$href.'" type="text/css" '.$attributes.'>';
        // return '<link rel="alternate" href="'.$href.'" type="application/atom+xml" title="Atom" '.$attributes.'>';
        if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
            return '<link rel="stylesheet" href="'.$href.'" type="text/css" '.$attributes.'>';
        } else {
            return '<link rel="stylesheet" href="'.Path::rebase($href).'" type="text/css" '.$attributes.'>';
        }
    }

    public static function linkjs($src = '', $attributes = '')
    {
        // return '<link rel="stylesheet" href="'.$href.'" type="text/css" '.$attributes.'>';
        // return '<link rel="alternate" href="'.$href.'" type="application/atom+xml" title="Atom" '.$attributes.'>';
        if (strpos($src, 'http') !== false || strpos($src, 'www') !== false) {
            return '<script src="'.$src.'"  '.$attributes.'></script>';
        } else {
            return '<script src="'.Path::rebase($src).'" '.$attributes.'></script>';
        }
    }

    public static function linkcustomcss($href = '', $rel = '', $attributes = '')
    {
        // return '<link rel="stylesheet" href="'.$href.'" type="text/css" '.$attributes.'>';
        // return '<link rel="alternate" href="'.$href.'" type="application/atom+xml" title="Atom" '.$attributes.'>';
        if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
            return '<link rel="'.$rel.'" href="'.$href.'" type="text/css" '.$attributes.'>';
        } else {
            return '<link rel="'.$rel.'"  href="'.Path::rebase($href).'" type="text/css" '.$attributes.'>';
        }
    }

    public static function linkcustom($href = '', $rel = '', $type = '', $attributes = '')
    {
        // return '<link rel="stylesheet" href="'.$href.'" type="text/css" '.$attributes.'>';
        // return '<link rel="alternate" href="'.$href.'" type="application/atom+xml" title="Atom" '.$attributes.'>';
        if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
            return '<link rel="'.$rel.'" href="'.$href.'" type="'.$type.'" '.$attributes.'>';
        } else {
            return '<link rel="'.$rel.'"  href="'.Path::rebase($href).'" type="'.$type.'" '.$attributes.'>';
        }
    }

    public static function favicon($href = '', $type = '', $attributes = '')
    {
        if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
            return '<link rel="shortcut icon" href="'.$href.'" type="'.$type.'">';
        } else {
            return '<link rel="shortcut icon" href="'.Path::rebase($href).'" type="text/css" '.$attributes.'>';
        }
    }

    public static function customfavicon($href = '', $rel = '', $type = '', $attributes = '')
    {
        if (strpos($href, 'http') !== false || strpos($href, 'www') !== false) {
            return '<link rel="'.$rel.'" href="'.$href.'" type="'.$type.'">';
        } else {
            return '<link rel="'.$rel.'" href="'.Path::rebase($href).'" type="text/css" '.$attributes.'>';
        }
    }

    public static function linkimport($href = '', $attributes = '')
    {
        return '<link rel="import" href="'.$href.'">';
    }

    public static function linkmanifest($href = '', $attributes = '')
    {
        return '<link rel="manifest" href="'.$href.'">';
    }

    public static function linkrss($href = '', $attributes = '')
    {
        return '<link rel="alternate" href="'.$href.'" type="application/rss+xml" title="RSS">';
    }

    public static function linktouchicon($href = '', $attributes = '')
    {
        return '<link rel="apple-touch-icon" href="'.$href.'">';
    }

    public static function main($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <main '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</main>
        ';

        return trim($tag);
    }

    public static function map($name = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <map name="'.$name.'" '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</map>
        ';

        return trim($tag);
    }

    public static function maparea($href = '', $shape = '', $cordinate = '', $attributes = '')
    {
        return '<area shape="'.$shape.'" coords="'.$cordinate.'" '.$href.' '.$attributes.'>';
    }

    public static function mark($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <mark '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</mark>
        ';

        return trim($tag);
    }

    public static function meter($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <meter '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</meter>
        ';

        return trim($tag);
    }

    public static function noframes($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <noframes '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</noframes>
        ';

        return trim($tag);
    }

    public static function noscript($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <noscript '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</noscript>
        ';

        return trim($tag);
    }

    public static function object($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <object '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</object>
        ';

        return trim($tag);
    }

    public static function ol($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <ol '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</ol>
        ';

        return trim($tag);
    }

    public static function optgroup($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <optgroup '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</optgroup>
        ';

        return trim($tag);
    }

    public static function option($value = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <option value="'.$value.'" '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</option>
        ';

        return trim($tag);
    }

    public static function output($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <output '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</output>
        ';

        return trim($tag);
    }

    public static function param($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <param '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</param>
        ';

        return trim($tag);
    }

    public static function picture($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <picture '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</picture>
        ';

        return trim($tag);
    }

    public static function pre($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <pre '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</pre>
        ';

        return trim($tag);
    }

    public static function prev($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <pre '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</pre>
        ';

        return trim($tag);
    }

    public static function preview($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <pre '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</pre>
        ';

        return trim($tag);
    }

    public static function progress($value = '', $max = '100', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <progress value="'.$value.'" max="'.$max.'" '.$attributes.'>';

        // foreach ($content as $result) {
        $tag .= implode('', $content);
        // }
        $tag .= '</progress>
        ';

        return trim($tag);
    }

    public static function progressbar($value = '', $max = '100', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <progress value="'.$value.'" max="'.$max.'" '.$attributes.'>';

        // foreach ($content as $result) {
        $tag .= implode('', $content);
        // }
        $tag .= '</progress>
        ';
        $return = trim($tag);
    }

    public static function q($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <q '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</q>
        ';

        return trim($tag);
    }

    public static function rp($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <rp '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</rp>
        ';

        return trim($tag);
    }

    public static function rt($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <rt '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</rt>
        ';

        return trim($tag);
    }

    public static function ruby($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <ruby '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</ruby>
        ';

        return trim($tag);
    }

    public static function s($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <s '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</s>
        ';

        return trim($tag);
    }

    public static function samp($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <samp '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</samp>
        ';

        return trim($tag);
    }

    public static function script($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <script '.$attributes.' reserved>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</script>
        ';

        return trim($tag);
    }

    public static function section($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <section '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</section>
        ';

        return trim($tag);
    }

    public static function select($name = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <select name="'.$name.'" '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</select>
        ';

        return trim($tag);
    }

    public static function small($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <small '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</small>
        ';

        return trim($tag);
    }

    public static function source($source = '', $type = '', $attributes = '')
    {
        // return ' <source src="'.$source.'" type="'.$type.'" '.$attributes.'>';
        if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
            $tag = ' <source src="'.$source.'" type="'.$type.'" '.$attributes.'>';
        } else {
            $tag = ' <source  src="'.Path::rebase($source).'" type="'.$type.'" '.$attributes.'/>';
        }

        return $tag;
    }

    public static function span($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <span '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</span>
        ';

        return trim($tag);
    }

    public static function strike($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <strike '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</strike>
        ';

        return trim($tag);
    }

    public static function strong($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <strong '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</strong>
        ';

        return trim($tag);
    }

    public static function style($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <style '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</style>
        ';

        return trim($tag);
    }

    public static function sub($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <sub '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</sub>
        ';

        return trim($tag);
    }

    public static function summary($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <summary '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</summary>
        ';

        return trim($tag);
    }

    public static function sup($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <sup '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</sup>
        ';

        return trim($tag);
    }

    public static function superscript($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <sup '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</sup>
        ';

        return trim($tag);
    }

    public static function svg($width = '', $height = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <svg '.$width.' '.$height.' '.$attributes.'>';

        // foreach ($content as $result) {
        $tag .= implode('', $content);
        // }
        $tag .= '</svg>
        ';

        return trim($tag);
    }

    public static function table($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <table '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</table>
        ';

        return trim($tag);
    }

    public static function tbody($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <tbody '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</tbody>
        ';

        return trim($tag);
    }

    public static function td($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <td '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</td>
        ';

        return trim($tag);
    }

    public static function template($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <template '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</template>
        ';

        return trim($tag);
    }

    public static function textarea($name = '', $rows = '', $cols = '', $attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <textarea '.$attributes.'>';

        // foreach ($content as $result) {
        $tag .= implode('', $content);
        // }
        $tag .= '</textarea>
        ';

        return trim($tag);
    }

    public static function tfoot($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <tfoot '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</tfoot>
        ';

        return trim($tag);
    }

    public static function th($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <th '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</th>
        ';

        return trim($tag);
    }

    public static function thead($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <th '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</th>
        ';

        return trim($tag);
    }

    public static function time($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <time '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</time>
        ';

        return trim($tag);
    }

    public static function tr($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <tr '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</tr>
        ';

        return trim($tag);
    }

    public static function track($attributes = '')
    {
        return' <track '.$attributes.'>';
    }

    public static function tt($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <tt '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</tt>
        ';

        return trim($tag);
    }

    public static function u($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <u '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</u>
        ';

        return trim($tag);
    }

    public static function ul($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <ul '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</ul>
        ';

        return trim($tag);
    }

    public static function var($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <var '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</var>
        ';

        return trim($tag);
    }

    public static function video($source = '', $width = '', $height = '', $type = '', $attributes = '')
    {
        $tag = ' <video width="'.$width.'" height="$'.$height.'" '.$attributes.' controls>';

        if (strpos($source, 'http') !== false || strpos($source, 'www.') !== false) {
            $tag .= '<source src="'.$source.'" type="'.$type.'">Your browser does not support the video tag.';
        } else {
            $tag .= '<source src="'.Path::rebase($source).'" type="'.$type.'">Your browser does not support the video tag.';
        }

        return $tag;

        $tag .= '</video>
        ';

        return trim($tag);
    }

    public static function wbr($attributes = '', $content = [])
    {
        if (is_array($content)) {
        } else {
            $content = [$content];
        }
        $tag = ' <wbr '.$attributes.'>';
        $tag .= implode('', $content);

        // foreach ($content as $result) {

        // }
        $tag .= '</wbr>
        ';

        return trim($tag);
    }

    public static function doctype()
    {
        return'<!DOCTYPE html>';
    }

    public static function linkphp($url)
    {
        return $url;
    }
}
