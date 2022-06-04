<?php

class Inputs
{
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
}
