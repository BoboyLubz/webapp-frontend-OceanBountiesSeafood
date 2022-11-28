<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('homepage');
    }
    public function login(){
        return view('login');
    }
    public function password(){
        return view('password');
    }
    public function register(){
        return view('register');
    }
    public function adminPage(){
        return view('adminPage');
    }
    public function announcement(){
        return view('announcement');
    }
    public function createAnnounce(){
        return view('createAnnounce');
    }
    public function editAnnounce(){
        return view('editAnnounce');
    }
    public function showAnnounce(){
        return view('showAnnounce');
    }
    public function inbox(){
        return view('inbox');
    }
}
