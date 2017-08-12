<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function add(Request $request){
        return parent::contact()->add($request);
    }

    public function del($id){
        return parent::contact()->del($id);
    }

    public function updt(Request $request,$id){
        return parent::contact()->updt($request,$id);
    }

    public function read($id){
        return parent::contact()->read($id);
    }

    public function index(){
        return parent::contact()->index();
    }

}
