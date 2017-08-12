<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Customer;
use App\PotentialCustomer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function customer(){
        $customer = new Customer();
        return $customer;
    }

    public function contact(){
        $contact = new Contact();
        return $contact;
    }

    public function pc(){
        $pc = new PotentialCustomer();
        return $pc;
    }
}
