<?php
use Illuminate\Support\Facades\Auth;
use App\User;
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
//     if(Auth::User()){
//         return view('welcome');
//     }
//     return redirect('/login');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/welcome', 'HomeController@welcome');
Route::get('/daftar-cetak', 'ngeprintController@daftarcetak');
Route::get('/ngeprint', function () {
    return view('ngeprint');
});
Auth::routes();

Route::get('/', 'HomeController@index')
    ->name('home');
Route:: post('/add-ngeprint','ngeprintController@store');

Route::get('/ngeprint/proses/{id}','ngeprintController@proses');
Route::get('/ngeprint/ditolak/{id}','ngeprintController@ditolak');
Route::get('/ngeprint/selesai/{id}','ngeprintController@selesai');
// Route::group (['middleware'=>'auth'], function(){
//     Route::get('/home', 'HomeController@index')->name('home');

// });