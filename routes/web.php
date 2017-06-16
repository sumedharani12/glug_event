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


Route::get('/index', function () {
	$d= date("Y-m-d");
    $workshop = DB::table('workshops')->where('date', '>', $d)->get();

    return view('index', ['workshop' => $workshop]);

});

Route::get('/', function () {

        return redirect('/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@destroy');

Route::get('notes', function () {
    $note = DB::table('notes')->get();

    return view('notes', ['note' => $note]);
});

Route::get('presentations', function () {
    $pres = DB::table('presentations')->get();

    return view('presentations', ['pres' => $pres]);
});

Route::get('feedback', function () {
    
    $d= date("Y-m-d");

    $workshop = DB::table('workshops')->where('date', '<', $d)->get();

    return view('feedback', ['workshop' => $workshop]);

});

Route::get('download/notes/{file_name}', function($file_name = null)
{
	$path = storage_path().'/'.'app'.'/files/notes/'.$file_name;
        return Response::download($path);

});

Route::get('download/presentations/{file_name}', function($file_name = null)
{
	$path = storage_path().'/'.'app'.'/files/presentations/'.$file_name;
        return Response::download($path);

});

Route::post('submitt', 'FeedbackController@submitt');

Route::get('/admin', function () {
    return View::make('auth.login');
});

Route::get('/admin/workshop', function () {
    return View::make('admin.workshop');
})->middleware('auth');

Route::get('/admin/notes', function () {
    return View::make('admin.notes');
})->middleware('auth');

Route::get('/admin/presentation', function () {
    return View::make('admin.pres');
})->middleware('auth');

Route::post('wadd', 'AdminController@wadd');

Route::post('padd', 'AdminController@padd');

Route::post('nadd', 'AdminController@nadd');

Route::get('/admin/feedback', function () {
    $fb = DB::table('feedback')->get();

    return view('admin.feedback', ['fb' => $fb]);
})->middleware('auth');
