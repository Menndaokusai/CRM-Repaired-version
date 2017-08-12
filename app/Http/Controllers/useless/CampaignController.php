<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function arr($num){
        $arr1=[
            'Campaign_Name','Status','Type','Expected_Close_Date','Sponsor','Target_Audience','Target_Size','Num_Sent','Budget_Cost',
            'Actual_Cost','Expected_Response','Expected_Revenue','Expected_Sales_Count','Actual_Sales_Count','Expected_Response_Count',
            'Actual_Response_Count','Expected_ROI','Actual_ROI','Manager'
        ];

        if($num==1){
            return $arr1;
        }

    }
    public function index()
    {
        $campaigns = \App\Campaign::paginate(15);
        return view('/admin/campaign/index',compact('campaigns'));
    }
    public function add(Request $request)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $campaign=campaign();

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $campaign[$value]=$_POST[$value];
            }
        }

        $campaign->save();

        return back();
    }
    public function del($id)
    {
        $user=campaign()->find($id);
        return $user->delete()?redirect('/admin/campaign'):back();
    }

    public function updt(Request $request,$id)
    {
        if(!is_logged())
        {
            return err('请先登录');
        }

        $campaign=campaign()->find($id);

        $arr1=$this->arr(1);

        foreach ($arr1 as $value){
            if(!empty($_POST[$value])){
                $campaign[$value]=$_POST[$value];
            }
        }

        $campaign->save();

        return redirect('/admin/campaign');

    }
    public function read($id)
    {
        $read=\campaign()->find($id);
        return view('/admin/campaign/read',compact('read'));
    }

}
