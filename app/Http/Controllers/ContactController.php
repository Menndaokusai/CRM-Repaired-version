<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function arr($num){
        $arr1=[
            'Contact_Name','Mobile_Phone','Home_Phone','Office_Phone','city',
            'Asst_Phone','Asst_Name','Sex','Department',
            'Designation','Email','Company','Manager','Birth'
        ];

        if($num==1){
            return $arr1;
        }

    }

    public function add($request)
    {
        $contact=parent::contact();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($request->get($value))){
                $contact[$value]=$request->get($value);
            }
        }

        $contact->save();
    }

    public function del($id)
    {
        $user=parent::contact()->find($id);
        return $user->delete()?1:0;
    }

    public function updt($request)
    {

        $contact=parent::Contact()->find($request['id']);

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($request->get($value))){
                $contact[$value]=$request->get($value);
            }
        }

        $contact->save();

    }
    public function read()
    {
        $read=parent::Contact()->all();
        return $read;
    }

    public function index()
    {
        return view('/admin/contact/index');
    }
}
