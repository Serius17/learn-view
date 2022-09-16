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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/portofolio', function (){
        return view('portofolio')->with ('umur', 'umur Fauzi 99');
    });
Route::get('/about/{nama?}', function ($nama = "Gak Tau") {
    $angka = [1,2,3,4,5];

    return view('universitas.about',
    compact('angka', 'nama')
    );  });
Route::view('/', 'index', ["nama" => "Fauzi Anjing", "kelas" => "A"]);
// Route::view('/portofolio', 'portofolio' );
// Route::view('/about', 'universitas.about');


