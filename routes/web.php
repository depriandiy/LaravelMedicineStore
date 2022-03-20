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

// Route::resource('product', 'ProductController');
Route::resource('medicines', 'MedicineController');
Route::resource('medicines.show', 'MedicineController@show');
Route::resource('category', 'CategoryController');
Route::get('category/listmedicine/{id}', 'CategoryController@showlist');
Route::get('listcatnomed', 'CategoryController@report');
Route::get('avgprice', 'CategoryController@avg_price');
Route::get('onemedicine', 'CategoryController@one_medicine');
Route::get('highestprice', 'CategoryController@highest_price');
Route::get('drugoneform', 'MedicineController@drug_one_form');

// Route::get('cobamed', 'MedicineController@report');
// Route::get('cobacat', 'CategoryController@report');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mystore', function () {
    return view('mystore');
});

Route::get('foo', function () {
    return "Hello Depri";
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('user/{id}/profile', function ($id) {
    return 'User '.$id;
})->name('profile');

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});

Route::get('greeting', function () {
    return view('welcome', ['name' => 'Depri Andiyanto']);
});

// Route::get('medicine', function () {
//     return view('medicine');
// }); // Data Manual

Route::get('equipment', function () {
    return view('equipment');
});

Route::get('medicine/{id}', function ($id) {
    return 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, perferendis nemo? Ex tenetur, dolores iste architecto voluptatem nihil cum omnis dolorem deleniti modi vel excepturi corrupti officiis laboriosam natus labore nobis eaque ipsam ab ipsum non? Repellendus dolorem neque dolor est placeat ad in quia mollitia perspiciatis impedit. Reiciendis, quis?';
})->name('detail_medicine');