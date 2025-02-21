<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class penggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('/login');
    }

    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|max:50',
        ]);
        
    }

}
