<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $data =['kaoutar', 23,'safi'];
        return view('blog.test',[
            "data"=>$data
        ]);
    }
}
