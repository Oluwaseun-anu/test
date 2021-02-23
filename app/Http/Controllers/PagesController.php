<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function profile(){
        
        return view('profile');
    }

    public function biography(){
        
        return view('biography');
    }
    
    public function chats(){
        
        return view('chats');
    }
    
    public function gallery(){
        
        return view('gallery');
    }

    public function games(){
        
        return view('games');
    }

    public function articles(){
        
        return view('articles');
    }

    public function article(){
        
        return view('article');
    }

    public function single(){
        
        return view('single');
    }
}


