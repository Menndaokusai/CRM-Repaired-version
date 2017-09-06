<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function arr($num){
        $arr1=[
            'Customer_Name','Customer_Type','Primary_Phone','Alternate_Phone',
            'province','city','detail'.
            'Ownership','Email','Manager'
        ];
        if($num==1){
            return $arr1;
        }
    }
    public function index()
    {
        return view('/admin/customer/index');
    }
    public function add()
    {
        $customer=parent::customer();
        $arr1=$this->arr(1);
        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $customer[$value]=$_POST[$value];
            }
        }
        $customer->save();

        return 1;
    }
    public function del($id)
    {
        $user=parent::customer()->find($id);
        return $user->delete()?1:0;
    }
    public function updt(Request $request)
    {
        $customer=parent::customer()->find($request->get('id'));

        $arr1=$this->arr(1);
        foreach ($arr1 as $value){
            if(!empty($request[$value])){
                $customer[$value]=$request[$value];
            }
        }
        $customer->save();
    }
    public function read()
    {
        $read=parent::customer()->all();
        return $read;
    }
}
