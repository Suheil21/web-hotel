<?php

namespace App\Http\Controllers\Image;

use App\Http\Controllers\Controller;
use App\Models\ImageModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('home');
    }
    public function store(Request $request){
        $data = new ImageModel();

        // $imageName = md5($this->image.microtime()).'.'<div class="1this-"></div>

        $data->nama_file = $request->nama_file;
    }

}
