<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/input', function () {
    return view('sidebar/input-acara/input');
});

Route::get('/list', function () {
    return view('sidebar/list-acara/list');
});

Route::get('/notification', function () {
    return view('header/notification/notification');
});

Route::get('/profile', function () {
    return view(
        'header/user/profile',
        [
            "name" => "wahid alfaridsi",
            "username" => "Stunggal",
            "role" => "super admin",
            "tweet" => "Stunggal57",
            "fb" => "wahidalfaridsi",
            "ig" => "sijisrunggal",
            "linkedin" => "wahid-alfaridsi-046572222",
            "about" => "loremefafafafafafkakdaihdyfygdsjjdhgsdjkchuxg\sjekladvcixhgzbdsnkeflrihudgzhsbjdkfriusdygvbdnkesfrsduzgyhsbadnesfdhxuzxgsbadsefrkjgfsdhuzgSHabefnrkgjdifvhuzcgshbsgrndkfhudzgsVaefsgrdfhu",
            "jabatan" => "sekretaris dema",
            "phone" => "+6285648887170",
            "email" => "wahidalfaridsiachmadzein@unida.gontor.ac.id"
        ]
    );
});
