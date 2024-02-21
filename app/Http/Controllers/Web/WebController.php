<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $data = [
            'page' => 'home',
        ];
        return view('webs.index')->with('data',$data);
    }
    public function about(){
        $data = [
            'page' => 'about',
        ];
        return view('webs.about')->with('data',$data);
    }
}
