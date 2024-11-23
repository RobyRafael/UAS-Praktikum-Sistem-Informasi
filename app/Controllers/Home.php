<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
         echo View('admin_header');
         echo View('admin_nav');
         echo View ('home'); 
         echo View('admin_footer');
    }
}
