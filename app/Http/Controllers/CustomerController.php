<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function add(){
        return parent::customer()->add();
    }

    public function del($id){
        return parent::customer()->del($id);
    }

    public function updt($id){
        return parent::customer()->updt($id);
    }

    public function read($id){
        return parent::customer()->read($id);
    }

    public function index(){
        return parent::customer()->index();
    }

}
