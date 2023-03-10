<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\{User,SessionModel};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (Session::get('user')){
        return view('login');
    }

    Session::put('name', 'Nghia Ngo test');

    $session = SessionModel::all();

    return view('welcome',['sessions' =>$session]);
});

Route::post('/create', function () {
    $user = User::create(request()->all());

    Session::push('user', [
        'name' => $user['name'],
        'email' => $user['email'],
    ]);

    return $user;
})->name('create');

Route::get('/twig', function () {
    $user = User::all();

    return view('welcome-twig',['users' =>$user]);
});

Route::post('login', function () {
    $user = User::where('name',request()->name)->where('password',request()->password)->first();
    Session::forget('user');
    Session::push('user', [
        'name' => $user->name,
        'email' => $user->email,
    ]);

    return view('login');
})->name('login');
