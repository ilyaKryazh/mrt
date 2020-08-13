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
    return view('index');
})->name('home');
Route::post('/emailfooter', 'EmailController@footerForm');

Route::get('/catalog', 'ProductController@index')->name('catalog');

Route::get('/product-detail/{id}','ProductController@edit')->name('details');

Route::get('/about', function () {
    return view('pages/company/about');
});
Route::get('/helium', function () {
    return view('pages/company/helium');
});
Route::get('/cryoservice', function () {
    return view('pages/company/cryoservice');
});
Route::get('/rf-coil', function () {
    return view('pages/company/rf-coil');
});
Route::get('/adsorber', function () {
    return view('pages/company/adsorber');
});
Route::get('/cooling-head', function () {
    return view('pages/company/cooling-head');
});
Route::get('/rf-cell', function () {
    return view('pages/company/rf-cell');
});
Route::get('/mri-room', function () {
    return view('pages/company/mri-room');
});

Route::get('/service', function () {
    return view('pages/service');
});
Route::get('/trade-in', function () {
    return view('pages/trade-in');
});
Route::get('/contacts', function () {
    return view('pages/contacts');
})->name('contacts');

Route::get('/business', function () {
    return view('pages/business/business');
});
Route::get('/activity', function () {
    return view('pages/business/activity');
});
Route::get('/career', function () {
    return view('pages/business/career');
});

Route::prefix('product-details')->group(function () {
    Route::get('philips-3-0t-achieva-mri-komplekt-premium', function () {
        return view('/pages/product-details/philips-3-0t-achieva');
    });
    Route::get('philips-intera-achieva-v-kruglykh-kozhukhakh', function () {
        return view('pages/product-details/philips-intera-achieva');
    });
});
