<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
• POST – customer
• GET – customer/all
• GET – customer/123
• PUT – customer/123
• DELETE – customer/123

• POST – payment
• GET – payment/all
• GET – payment/123
• PUT – payment/123
• DELETE – payment/123

• GET – customer/123/payments
|
*/

$router->post('customer', ['as' => 'customer-create', 'uses' => 'CustomerController@store']);
$router->get('customer/all', ['as' => 'customer-all', 'uses' => 'CustomerController@all']);
$router->get('customer/{id}', ['as' => 'customer-searchId', 'uses' => 'CustomerController@show']);
$router->get('customer/{id}/payments', ['as' => 'customer-idAllPayments', 'uses' => 'CustomerController@showPayment']);
$router->put('customer/{id}', ['as' => 'customer-update', 'uses' => 'CustomerController@update']);
$router->delete('customer/{id}', ['as' => 'customer-delete', 'uses' => 'CustomerController@destroy']);

$router->post('payment', ['as' => 'payment-create', 'uses' => 'PaymentController@store']);
$router->get('payment/all', ['as' => 'payment-all', 'uses' => 'PaymentController@all']);
$router->get('payment/{id}', ['as' => 'payment-searchId', 'uses' => 'PaymentController@show']);
$router->put('payment/{id}', ['as' => 'payment-update', 'uses' => 'PaymentController@update']);
$router->delete('payment/{id}', ['as' => 'payment-delete', 'uses' => 'PaymentController@destroy']);
