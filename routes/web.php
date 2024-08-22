<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

// Access a page 
// Route::get('/subject', function () {
//     return view('subject');
// });

// Access a page with uri parameter 
// Route::get('/home/{id}', function ($id) {
//     return view('home',['id'=>$id]);
// });



Route::get('/about', function(){
    return view('about');
});

Route::get('/subject', function(){
    return view('subject');
});

Route::get('/subjects', function(){
    return view('subjects');
});

Route::get('/notes', function(){
    return view('classnotes');
});

Route::get('/edresources', function(){
    return view('edresources');
});

Route::get('/subscriptions', function(){
    return view('subscriptions');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/login', function(){
    return view('login');
});


//  To reduce longer url 
// Route::get('/educational-resources', function(){
//     return view('about');
// })->name('edresources');

// {{ route('edresources')}} to references the route in the view page


// Access a nested view page with uri parameter 
Route::get('/dashboard/{name}/{lname}', function ($name, $lname) {
    return view('admin.dashboard',['name'=>$name, 'lname'=>$lname]);
});

Route::get('user', [UserController::class, 'getUser']);
Route::get('username/{name}', [UserController::class, 'getUsername']);

// How to get access view from controller 
// Route::get('home', [UserController::class, 'getHome']);