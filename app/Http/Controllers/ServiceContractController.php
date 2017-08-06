<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceContractController extends Controller
{
    public function arr($num){
        $arr1=[
            'Subject','Status','Type','Start_Date','End_Date','Tracking_Unit',
            'Total_Units','Used_Units','Related','Priority','Manager'
        ];

        if($num==1){
            return $arr1;
        }

    }
    public function index()
    {
        $scs = \App\ServiceContract::paginate(15);
        return view('/admin/ServiceContract/index',compact('scs'));
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $sc=sc();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $sc[$value]=$_POST[$value];
            }
        }

        $sc->save();

        return back();
    }
    public function del($id)
    {
        $user=sc()->find($id);
        return $user->delete()?redirect('/admin/servicecontract'):back();
    }

    public function updt(Request $request,$id)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $sc=sc()->find($id);

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $sc[$value]=$_POST[$value];
            }
        }

        $sc->save();

        return redirect('/admin/servicecontract');

    }
    public function read($id)
    {
        $read=\sc()->find($id);
        return view('/admin/ServiceContract/read',compact('read'));
    }
}
