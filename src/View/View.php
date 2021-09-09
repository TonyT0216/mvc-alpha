<?php

namespace App\View;

/**
 * A View Class
 */
class View
{
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = "../src/View/$view";

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }
}