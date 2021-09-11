<?php

namespace App\View;

use Exception;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

/**
 * A View Class
 */
class View
{
    /**
     * @throws Exception
     */
    public static function render($view, $args = []) : void
    {
        extract($args, EXTR_SKIP);

        $file = "../src/View/$view";

        if (is_readable($file)) {
            require $file;
        } else {
            throw new Exception("$file not found");
        }
    }

    public static function renderTemplate(string $template, array $args = []) : void
    {
        static $twig = null;
        if ($twig === null) {
            $str = dirname(__DIR__) . '/View';
            $loader = new FilesystemLoader($str);
            $twig = new Environment($loader);
        }

        try {
            echo $twig->render($template, $args);
        } catch (LoaderError | RuntimeError | SyntaxError $e) {
            $e->getMessage();
        }
    }
}