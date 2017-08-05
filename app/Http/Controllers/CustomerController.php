<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function doadd(){
        return parent::customer()->add();
    }

    public function dodel($id){
        return parent::customer()->del($id);
    }

    public function doupdt($id){
        return parent::customer()->updt($id);
    }

    public function doread($id){
        return parent::customer()->read($id);
    }

    public function doindex(){
        return parent::customer()->index();
    }

}
