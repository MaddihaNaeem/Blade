<?php

namespace App\Http\Controllers;

use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
       
        $userCount = User::count();
       

       
        return view('admin', compact('userCount'));
    }
}
