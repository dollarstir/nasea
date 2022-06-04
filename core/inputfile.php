<?php

class Inputfile
{
    public static function basic($name = 'file', $label = 'Basic file upload', $class = '', $other = '')
    {
        return '<div class="mb-3">
        <label for="formFile" class="form-label">'.$label.'</label>
        <input class="form-control '.$class.'" type="file" id="formFile" name="'.$name.'" '.$other.'>
      </div>';
    }

    public static function multifile($name = 'file', $label = 'multiple files upload', $class = '')
    {
        return '<div class="mb-3">
        <label for="formFileMultiple" class="form-label">'.$label.'</label>
        <input class="form-control '.$class.'" type="file" id="formFileMultiple" multiple>
      </div>';
    }

    public static function disabled($name = 'file', $label = 'disabled file upload', $class = '')
    {
        return '<div class="mb-3">
        <label for="formFileDisabled" class="form-label">'.$label.'</label>
        <input class="form-control '.$class.'" type="file" id="formFileDisabled" disabled>
      </div>';
    }

    public static function mini($name = 'file', $label = 'Small file input example', $class = '')
    {
        return '<div class="mb-3">
        <label for="formFileSm" class="form-label">'.$label.'</label>
        <input class="form-control '.$class.'" type="file" id="formFileSm">
      </div>';
    }

    public static function large($name = 'file', $label = 'Large file input example', $class = '')
    {
        return '<div class="mb-3">
        <label for="formFileLg" class="form-label">'.$label.'</label>
        <input class="form-control '.$class.'" type="file" id="formFileLg">
      </div>';
    }
}
