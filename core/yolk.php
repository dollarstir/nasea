<?php

class Yolk
{
    public static function goto($loaction)
    {
        echo  '<script>window.location="'.$loaction.'"</script>';
    }

    public static function say($something)
    {
        echo $something;
    }

    public static function uicore($type)
    {
        switch ($type) {
            case 'cssb':
                return '<link rel="stylesheet" href="'.Path::rebase('ui/css/bootstrap.min.css').'">';
                // break;

            case 'cssa':
                return '<link rel="stylesheet" href="'.Path::rebase('ui/css/sweetalert2.min.css').'">';
                // break;
            case 'cssfa':
                return '<link rel="stylesheet" href="'.Path::rebase('ui/css/all.min.css').'">';
                // break;
            case 'jsa':
                return '<script src="'.Path::rebase('ui/js/sweetalert2.all.min.js').'"></script>';
                // break;
            case 'jsj':
                return '<script src="'.Path::rebase('ui/js/jquery.min.js').'"></script>';
                // break;
            case 'jsb':
                return '<script src="'.Path::rebase('ui/js/bootstrap.min.js').'"></script>';
                // break;
            case 'jsfa':
                return '<script src="'.Path::rebase('ui/js/all.min.js').'"></script>';
                // break;
            case 'ps':
                return '<script src="'.Path::rebase('processor/processor.js').'"></script>';
            case 'corecss':
                return '<link rel="stylesheet" href="'.Path::rebase('ui/css/bootstrap.min.css').'">
                <link rel="stylesheet" href="'.Path::rebase('ui/css/all.min.css').'">
                <link rel="stylesheet" href="'.Path::rebase('ui/css/sweetalert2.min.css').'">
                ';
               

                // break;
            case 'corejs':
                return '<script src="'.Path::rebase('ui/js/jquery.min.js').'"></script>
                <script src="'.Path::rebase('ui/js/bootstrap.min.js').'"></script>
                <script src="'.Path::rebase('ui/js/all.min.js').'"></script>
                <script src="'.Path::rebase('ui/js/sweetalert2.all.min.js').'"></script>
                <script src="'.Path::rebase('processor/processor.js').'"></script>';
                

                // break;
        }
    }

    public static function button($type, $text = 'Button', $class = 'primary add', $id = '', $onclick = '', $other = '')
    {
        switch ($type) {
            case 'btn':
                return '
                <div style="margin-top:10px;margin-bottom:10px;">
                <button  class="btn btn-'.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.' >'.$text.'</button>
                </div>';
                break;
            case 'btn-group':
                return '<div class="btn-group" role="group" aria-label="Basic example">
                <button class="btn btn-'.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.' >'.$text.'</button>
                 </div>';
                break;
            case 'btn-group-vertical':
                return '<div class="btn-group-vertical" role="group" aria-label="Basic example">
                <button class="btn btn-'.$class.'" id="'.$id.'" onclick="'.$onclick.'">'.$text.'</button>
                </div>';
                break;
            case 'btn-group-toggle':
                return '<div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-'.$class.'">
                <input type="checkbox" id="'.$id.'" onclick="'.$onclick.'">'.$text.'
                </label>
                </div>';
                break;
            case 'btn-group-justified':
                return '<div class="btn-group-justified" role="group" aria-label="Basic example">
                <button class="btn btn-'.$class.'" id="'.$id.'" onclick="'.$onclick.'">'.$text.'</button>
                </div>';
                break;
            case 'btn-group-vertical-justified':
                return '<div class="btn-group-vertical-justified" role="group" aria-label="Basic example">
                <button class="btn btn-'.$class.'" id;="'.$id.'" onclick="'.$onclick.'">'.$text.'</button>';
        }
    }

    public static function input($type, $name = '', $class = '', $id = '', $label = '', $value = '', $other = '', $onclick = '')
    {
        switch ($type) {
            case 'text':
                return '
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="text" name="'.$name.'" value="'.$value.'" class="form-control '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>';
                
            case 'password':
                return'
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="password" name="'.$name.'" value="'.$value.'" class="form-control '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>';
                // break;
            case 'email':
                return '
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="email" name="'.$name.'" value="'.$value.'" class="form-control '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>';
                // break;
            case 'number':
                return '
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="number" name="'.$name.'" value="'.$value.'" class="form-control '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>';
                // break;
            case 'textarea':
                return '
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <textarea name="'.$name.'" class="form-control '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>'.$value.'</textarea>';
                // break;
            case 'reset':
                    return '
                    <div style="margin-top:10px;margin-bottom:10px;">
                    <button type="reset" class=" btn btn-'.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>'.$label.'</button>
                    
                    </div>';

                // break;
            case 'submit':
                    return '
                    <div style="margin-top:10px;margin-bottom:10px;">
                    <input name="'.$name.'" type="submit" class=" btn btn-'.$class.'" id="'.$id.'" value="'.$label.'" '.$other.'>
                    
                    </div>';
                // break;
            case 'color':
                return '
                <div class="mb-3">
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="color" name="'.$name.'" value="'.$value.'" class="form-control form-control-color '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>
                </div>';
                // break;

            case 'range':
                return '
                <div class="mb-3">
                <label for="'.$id.'" class="form-label">'.$label.'</label>
                <input type="range" name="'.$name.'" value="'.$value.'" class="form-range '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>
                </div>';
                // break;
            case 'checkbox':
                return '
                <div class="mb-3">
                
                <input type="checkbox" name="'.$name.'" value="'.$value.'" class="form-check-input'.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>
                <label for="'.$id.'" class="form-check-label '.$class.'">'.$label.'</label>
                </div>';
                // break;
            case 'radio':
                return '
                <div class="mb-3">
                
                <input type="radio" name="'.$name.'" value="'.$value.'" class="form-check-input  '.$class.'" id="'.$id.'" onclick="'.$onclick.'" '.$other.'>
                <label for="'.$id.'" class="form-check-label '.$class.'">'.$label.'</label>
                </div>';
                // break;
        }
    }

    public static function floatingInput($type, $label, $name = '', $class = '', $placeholder = '', $id = '', $other = '')
    {
        if (strtolower($type) == 'textarea') {
            return'<div class="form-floating">
                <textarea class="form-control '.$class.'" id="'.$id.'" name="'.$name.'" placeholder="'.$placeholder.'"></textarea>
                <label for="'.$id.'">'.$label.'</label>
              </div> ';
        } else {
            return '
            <div class="form-floating mb-3">
                <input type="'.$type.'" class="form-control '.$class.'" id="'.$id.'" placeholder="'.$placeholder.'" '.$other.'>
                <label for="floatingInput">'.$label.'</label>
            </div>
            ';
        }
    }
}
