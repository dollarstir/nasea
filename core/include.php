<?php

function involve($file)
{
    if (strpos($file, '.php') !== false) {
        return require __DIR__.'/../fragement/'.$file;
    } else {
        return require __DIR__.'/../fragement/'.$file.'.php';
    }
}
