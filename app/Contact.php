<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Contact extends Model
{

     protected $table="contacts";

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
        if(!is_logged())
        {
            return err('请先登录');
        }

        $contact=contact();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($request->get($value))){
                $contact[$value]=$request->get($value);
            }
        }

        $contact->save();

        return back();
    }

    public function del($id)
    {
        $user=contact()->find($id);
        return $user->delete()?redirect('/admin/contact'):back();
    }

    public function updt($request,$id)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }
        $contact=Contact()->find($id);

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($request->get($value))){
                $contact[$value]=$request->get($value);
            }
        }

        $contact->save();


        return redirect('/admin/contact');

    }
    public function read($id)
    {
        $read=contact()->find($id);
        return view('/admin/contact/read',compact('read'));
    }

    public function index()
    {
        $contacts = \App\Contact::paginate(15);
        return view('/admin/contact/index',compact('contacts'));

    }
}
