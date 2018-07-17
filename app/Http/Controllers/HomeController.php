<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Img;
use App\Img2;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cover = Img::paginate(36);
       $cover2 = Img2::paginate(1);
      
       
       
        return view('panel.index')
                       
                        ->with('cover',$cover)
                        ->with('cover2',$cover2);
    }
    
    
}
