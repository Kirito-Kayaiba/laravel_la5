<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class TinController extends Controller
{
    //nạp view home
    public function index(){
        $data = \App\Models\tin::all();
        return view('Tin/danhsach',['data' => $data]);
    }
    //tham số của tin, nạp view chitiet
    public function chitiet($id=0){
        $tin = \DB::table('tin')->where('id',$id)->first();
        $data = ['id' => $id,'tin' => $tin];
        return view("chitiet",$data);
    }
    //tintrongloai : tham số là $idLT , nạp view tintrongloai
    public function getTintrongloai($idLT=0){
        $listtin = \DB::table('tin')->where('idLT',$idLT)->get();
        $data = ['idLT' => $idLT,'listtin' => $listtin];
        return view('tintrongloai',$data);
    }
    public function tintrongloai($idLT=0){
        $data = ['id'=> $idLT];
        return view('tintrongloai',$data);
    }
    public function them(){
        return view("Tin/themtin");
    }
    public function them_(){
        $t = new \App\Models\tin();
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return redirect('/tin/ds');
    }
    function capnhat($id){
        $t = \App\Models\tin::find($id);
        if($t==null) return redirect('thongbao');
        return view('Tin/capnhat',['tin'=>$t]);
    }
    function capnhat_($id){
        $t = \App\Models\tin::find($id);
        if($t==null) return redirect('thongbao');
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return redirect('tin/ds');
    }
    function xoa($id){
        $t = \App\Models\tin::find($id);
        if($t==null) return redirect('thongbao');
        $t->delete();
        return redirect('tin/ds');
    }
}
