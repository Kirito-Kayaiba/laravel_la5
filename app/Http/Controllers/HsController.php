<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HsController extends Controller
{
    public function hs(){
        return view('nhaphs');
    }
    public function hs_store(Request $request){
        $request->validate([
            'hoten'=>['required','min:3','max:20'],
            'ngaysinh'=>['required','date'],
            'tuoi'=>'required|integer|min:16|max:100',
        ]);
        echo "code xử lý";
    }
}
