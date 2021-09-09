<?php

namespace App\Controller;

use App\View\View;

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

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction() : void
    {
        View::renderTemplate('Entry/index.html');
    }
}