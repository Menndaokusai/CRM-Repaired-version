<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Customer extends Model
{
    //
    protected $table="customers";

    public function arr($num){

        $arr1=[
            'Customer_Name','Customer_Type','Primary_Phone','Alternate_Phone','city',
            'Ownership','Email','Manager'
        ];

        if($num==1){
            return $arr1;
        }
    }
    public function index()
    {
        $customers = \App\Customer::paginate(15);
        return view('/admin/customer/index',compact('customers'));
    }

    public function add()
    {
        $account=customer();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $account[$value]=$_POST[$value];
            }
        }
        $account->save();
        return back();
    }
    public function del($id)
    {
        $user=customer()->find($id);
        return $user->delete()?redirect('/admin/customer'):back();
    }

    public function updt($id)
    {

        $account=customer()->find($id);

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $account[$value]=$_POST[$value];
            }
        }

        $account->save();

        return redirect('/admin/customer');

    }

    public function read($id)
    {
        $read=customer()->find($id);
        return view('/admin/customer/read',compact('read'));
    }
}
