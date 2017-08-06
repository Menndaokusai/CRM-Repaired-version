<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function arr($num){
        $arr1=[
            'Opportunity_Name','Account_Name','Contact_Name','Amount','Type',
            'Expected_Close_Date','Sales_Stage','Probability','Manager'
        ];

        if($num==1){
            return $arr1;
        }

    }
    public function index()
    {
        $opps = \App\Opportunity::paginate(15);
        return view('/admin/opportunity/index',compact('opps'));
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $opp=opp();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $opp[$value]=$_POST[$value];
            }
        }

        $opp->save();

        return back();
    }
    public function del($id)
    {
        $user=opp()->find($id);
        return $user->delete()?redirect('/admin/opportunity'):back();
    }

    public function updt(Request $request,$id)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $opp=opp()->find($id);

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($request->get($value))){
                $opp[$value]=$request->get($value);
            }
        }

        $opp->save();

        return redirect('/admin/opportunity');

    }
    public function read($id)
    {
        $read=\opp()->find($id);
        return view('/admin/opportunity/read',compact('read'));
    }
}
