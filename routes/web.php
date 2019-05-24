<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/key_generate',function(){
    return str_random(32);
});
$router->get('/profile/{id}',function($id){
    return 'user id = '.$id;
});
$router->get('/admin/home',['middleware'=>'age',function(){
    return  'old enough';
}]);
$router->get('/fail',function(){
    return 'fail';
});
$router->post('/foo','ExampleController@foo');
$router->post('/login','AuthController@login');
$router->post('/register','AuthController@register');