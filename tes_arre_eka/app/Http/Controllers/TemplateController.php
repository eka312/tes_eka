<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function master()
    {
       return view('templating.master');
    }

    public function index()
    {
       return view('templating.beranda');
    }

    public function templating_login()
    {
       return view('templating.templating_login');
    }

}
