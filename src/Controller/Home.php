<?php

namespace App\Controller;

use App\View\View;

class Home extends Controller
{
    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
//        echo " (after)";
    }

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
//        echo "(before) ";
        //return false;
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::render('Home/index.php');
    }

}