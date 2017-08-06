<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotentialCustomerController extends Controller
{
    public function arr($num){

        $arr1=[
            'PC_Name','Industry','Primary_Phone','Mobile_Phone','city',
            'Company','Email','Manager'
        ];

        if($num==1){
            return $arr1;
        }

    }
    public function index()
    {
        $pcs = \App\PotentialCustomer::paginate(15);
        return view('/admin/PotentialCustomer/index',compact('pcs'));
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $pc=pc();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $pc[$value]=$_POST[$value];
            }
        }

        $pc->save();

        return back();
    }
    public function del($id)
    {
        $user=pc()->find($id);
        return $user->delete()?redirect('/admin/potentialcustomer'):back();
    }
    public function updt(Request $request,$id)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $pc=pc()->find($id);

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $pc[$value]=$_POST[$value];
            }
        }

        $pc->save();

        return redirect('/admin/potentialcustomer');

    }
    public function read($id)
    {
        $read=\pc()->find($id);
        return view('/admin/PotentialCustomer/read',compact('read'));
    }
}
