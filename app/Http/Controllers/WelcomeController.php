<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home()
    {
        return 'Bienvenu sur la page contact';
    }
}
