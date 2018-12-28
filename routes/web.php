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

/*Route::get('/', function () {
    return view('gd/gd');
});*/
Route::get('/', function () {
    return view('gd/gd');
});

/*Route::get('/contact', function () {
   $users =  \App\User::get();
    return view('gd/contact', [
        'user'=> $users,
        ]);

});*/

Route::get('/news', function () {
    return view('gd/news');
});

Route::get('/us', function () {
    return view('gd/us');
});

Route::get('/story', function () {
    return view('gd/story');
});



Route::get('/admin', function () {
    return view('gd/admin');
});



Route::get('/contact', function () {
    return view('gd/contact', [
        'is_sent'=> false,
    ]);
});


Route::post('/contact', function () {
    $item = new \App\User;
    $item -> name = \Request('name');
    $item -> email = \Request('email');
    $item -> question = \Request('question');
    $item -> save();
    return view('gd/contact', [
        'is_sent'=> true,
        ]);
});

Route::get('/db/users', function () {
    return view('gd/db/users');

});

Route::delete('db/users', function () {
    $deleteitem = new \App\User;
    $deleteitem -> id = \Request('id');
    $deleteitem -> delete();
    return view('gd/db/users');
});

Route::get('/db/workers', function () {
    return view('gd/db/workers',[
        'add_worker'=>false,
    ]);
});

Route::delete('db/workers', function () {
    $deleteitem = new \App\Workers;
    $deleteitem -> id = \Request('id');
    $deleteitem -> delete();
    return view('gd/db/workers',[
        'add_worker'=>false,
    ]);
});

Route::post('/db/workers', function () {
    $item = new \App\Workers;
    $item -> name = \Request('name');
    $item -> position = \Request('position');
    $item -> contact = \Request('contact');
    $item -> save();
    return view('gd/db/workers',[
        'add_worker'=> true,
    ]);
});

Route::get('/db/newnews', function () {
    return view('gd/db/newnews',[
        'add_news'=>false,
    ]);
});

Route::post('/db/newnews', function () {
    $item = new \App\News;
    $item -> title = \Request('title');
    $item -> content = \Request('content');
    $item -> save();
    return view('gd/db/newnews',[
        'add_news'=>true,
    ]);
});

Route::delete('db/newnews', function () {
    $deleteitem = new \App\News;
    $deleteitem -> id = \Request('id');
    $deleteitem -> delete();
    return view('gd/db/newnews',[
        'add_news'=>false,
    ]);
});
