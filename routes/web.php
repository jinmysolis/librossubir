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
Route::get('/home', 'HomeController@index');


Route::resource('/', 'panelController');


Route::resource('panel', 'PanelController');




Route::resource('Imagenes', 'ImgController');

Route::resource('links', 'LinksController');


Route::get('Imagenese/{filename}', function($filename){
    $path = storage_path("app/images/$filename");
    if(!\File::exists($path)) abort(404);
    $file = \File::get($path);
    
    $type = \File::mimeType($path);
    
    $response = Response::make($file,200);
    
    $response->header("Content-type",$type);
    
    return $response;
});





Auth::routes();

