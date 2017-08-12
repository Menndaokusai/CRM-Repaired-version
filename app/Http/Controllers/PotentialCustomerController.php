<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotentialCustomerController extends Controller
{

    public function add(){
        return parent::pc()->add();
    }

    public function del($id){
        return parent::pc()->del($id);
    }

    public function updt($id){
        return parent::pc()->updt($id);
    }

    public function read($id){
        return parent::pc()->read($id);
    }

    public function index(){
        return parent::pc()->index();
    }

}
