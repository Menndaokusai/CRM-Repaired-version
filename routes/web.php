<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'LoginController@index');
    Route::get('/login', 'LoginController@index');
    Route::any('/admin/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout');
    // 需要登陆的//
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['middleware' => 'auth:web'], function () {
            Route::get('/home', function(){
                return view('/admin/home/index');
            });
            // 用户管理
            Route::get('/users', 'UserController@index');
            Route::any('/users/store', 'UserController@store');
            Route::any('/users/del/{id}', 'UserController@del');

            Route::get('/contact', 'ContactController@index');
            Route::any('/contacts/add','ContactController@add');
            Route::put('/contacts/updt/{read}','ContactController@updt');
            Route::any('/contacts/del/{id}','ContactController@del');
            Route::any('/contacts/read/{id}','ContactController@read');

            Route::get('/customer','CustomerController@index');
            Route::any('/customers/add','CustomerController@add');
            Route::put('/customers/updt/{read}','CustomerController@updt');
            Route::any('/customers/del/{id}','CustomerController@del');
            Route::any('/customers/read/{id}','CustomerController@read');

            Route::get('/potentialcustomer','PotentialCustomerController@index');
            Route::any('/pc/add','PotentialCustomerController@add');
            Route::put('/pc/updt/{read}','PotentialCustomerController@updt');
            Route::any('/pc/del/{id}','PotentialCustomerController@del');
            Route::any('/pc/read/{id}','PotentialCustomerController@read');

//            Route::get('/campaign','CampaignController@index');
//            Route::any('/campaigns/add','CampaignController@add');
//            Route::put('/campaigns/updt/{read}','CampaignController@updt');
//            Route::any('/campaigns/del/{id}','CampaignController@del');
//            Route::any('/campaigns/read/{id}','CampaignController@read');
//
//            Route::get('/opportunity','OpportunityController@index');
//            Route::any('/opp/add','OpportunityController@add');
//            Route::put('/opp/updt/{read}','OpportunityController@updt');
//            Route::any('/opp/del/{id}','OpportunityController@del');
//            Route::any('/opp/read/{id}','OpportunityController@read');
//
//            Route::get('/ticket','TicketController@index');
//            Route::any('/tickets/add','TicketController@add');
//            Route::put('/tickets/updt/{read}','TicketController@updt');
//            Route::any('/tickets/del/{id}','TicketController@del');
//            Route::any('/tickets/read/{id}','TicketController@read');
//
//            Route::get('/servicecontract','ServiceContractController@index');
//            Route::any('/sc/add','ServiceContractController@add');
//            Route::put('/sc/updt/{read}','ServiceContractController@updt');
//            Route::any('/sc/del/{id}','ServiceContractController@del');
//            Route::any('/sc/read/{id}','ServiceContractController@read');
//
//            Route::get('/project','ProjectController@index');
//            Route::any('/projects/add','ProjectController@add');
//            Route::put('/projects/updt/{read}','ProjectController@updt');
//            Route::any('/projects/del/{id}','ProjectController@del');
//            Route::any('/projects/read/{id}','ProjectController@read');

        });
    });

});
