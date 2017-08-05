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
            'Account_Name','Account_Type','Primary_Phone','Alternate_Phone','city',
            'Ownership','Email','Manager'
        ];

        if($num==1){
            return $arr1;
        }
    }
    public function index()
    {
        $accounts = \App\Account::paginate(15);
        return view('/admin/account/index',compact('accounts'));
    }

    public function add()
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $account=account();

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
        $user=account()->find($id);
        return $user->delete()?redirect('/admin/account'):back();
    }

    public function updt($id)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $account=account()->find($id);

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $account[$value]=$_POST[$value];
            }
        }

        $account->save();

        return redirect('/admin/account');

    }

    public function read($id)
    {
        $read=account()->find($id);
        return view('/admin/account/read',compact('read'));
    }
}
