<?php

use Illuminate\Http\Request;

$router->group(["prefix" => "tasks"], function ($router) {

	$router->post("", "Tasks@create");
	$router->get("", "Tasks@list");
	$router->get("{task}", "Tasks@read");

});
/*

|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});
