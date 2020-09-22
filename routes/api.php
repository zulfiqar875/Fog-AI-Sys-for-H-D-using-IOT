<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('/test',function(){
    return "ok"; 
});
// Route::group(['middleware' => 'cors', 'prefix' => '/v1'], function () {
//     Route::post('/register', 'ClientController@test');
//     Route::post('/login', 'ClientController@register');
//     Route::get('/logout/{api_token}', 'ClientController@logout');
// });

// Route::get("/ApiRoute","MachineController@check");
// here call this function with data what u received from form
//orvce which creates json from form data and sends to php_check_syntaxpublic 
// function saveApiData()
// {
//     $client = new Client();
//     $res = $client->request('POST', 'https://url_to_the_api', [
//         'form_params' => [
//             'client_id' => 'test_id',
//             'secret' => 'test_secret',
//         ]
//     ]);
//     //listen one thinf ishow you someting...
//     echo $res->getStatusCode();
//     // 200
//     echo $res->getHeader('content-type');
//     // 'application/json; charset=utf8'
//     echo $res->getBody();
    // {"type":"User"...'

// ok i show
// now actually i want to this flask api to .connect the laravel project when i pass the parameter here...