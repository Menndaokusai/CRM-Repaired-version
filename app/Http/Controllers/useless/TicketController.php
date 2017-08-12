<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function arr($num){
        $arr1=[
            'Title','Account_Name','Contact_ID','Status','Severity','Hours',
            'Days','Category','Priority','Description','Solution','Manager'
        ];

        if($num==1){
            return $arr1;
        }

    }
    public function index()
    {
        $tickets = \App\Ticket::paginate(15);
        return view('/admin/ticket/index',compact('tickets'));
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $ticket=ticket();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $ticket[$value]=$_POST[$value];
            }
        }

        $ticket->save();

        return back();
    }
    public function del($id)
    {
        $user=ticket()->find($id);
        return $user->delete()?redirect('/admin/ticket'):back();
    }


    public function updt(Request $request,$id)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $ticket=ticket()->find($id);

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $ticket[$value]=$_POST[$value];
            }
        }

        $ticket->save();

        return redirect('/admin/ticket');

    }
    public function read($id)
    {
        $read=\ticket()->find($id);
        return view('/admin/ticket/read',compact('read'));
    }
}
