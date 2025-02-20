<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function master()
    {
       return view('/master');
    }

    public function index()
    {
       return view('/beranda');
    }

    public function bg_login()
    {
       return view('/bg_login');
    }
}
