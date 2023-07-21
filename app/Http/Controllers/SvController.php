<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuleNhapSv;
class SvController extends Controller
{
    public function sv(){
        return view('nhapsv');
    }
    function sv_store(RuleNhapSv $request){
        echo "Code Xử Lý Lưu Thông Tin Sinh Viên";
    }
}
