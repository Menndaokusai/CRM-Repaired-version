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
        return view('/admin/PotentialCustomer/index');
    }
    public function add(Request $request)
    {
        $pc=parent::pc();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($request[$value])){
                $pc[$value]=$request[$value];
            }
        }

        $pc->save();
    }
    public function del($id)
    {
        $user=parent::pc()->find($id);
        return $user->delete()?1:0;
    }
    public function updt(Request $request)
    {
        $pc=parent::pc()->find($request->get('id'));

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($request[$value])){
                $pc[$value]=$request[$value];
            }
        }

        $pc->save();
    }
    public function read()
    {
        $read=parent::pc()->all();
        return $read;
    }

}
