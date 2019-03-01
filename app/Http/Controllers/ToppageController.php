<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ToppageController extends Controller
{
    public function index()
    {
        // ログインしている場合
        if (Auth::check()) {
            return redirect('home');
        }
        return view('welcome');
        // ログインしていない場合
    }
}
