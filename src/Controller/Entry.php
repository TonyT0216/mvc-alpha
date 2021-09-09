<?php

namespace App\Controller;

class Entry extends Controller
{
    public function addNewAction()
    {
        echo 'addNewAction to Entry controller';
    }

    public function editAction()
    {
        echo '<p>Route parameters: <pre>' .
            htmlspecialchars(print_r($this->routeParams, true)) . '</pre></p>';
    }

    public function indexAction()
    {
        echo 'indexAction to Entry controller';
    }
}