<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});


Route::get('/mainpage', 'MainpageController@mainpage')->name('mainpage');

/*Trasport Locator*/
Route::get('/translocator', 'MainpageController@translocator')->name('translocator');
Route::get('/tl_search', 'MainpageController@tl_search')->name('tl_search');
Route::get('/translocator_location', 'MainpageController@translocator_location')->name('translocator_location');
Route::post('/translocator_location_update/{id}', 'MainpageController@translocator_location_update')->name('translocator_location_update');

/*Search Location*/
Route::post('/search_mun', 'MainpageController@search_mun')->name('search_mun');
Route::post('/search_brgy', 'MainpageController@search_brgy')->name('search_brgy');

/*COVID19 Tracer*/
Route::get('/covid_tracer', 'MainpageController@covid_tracer')->name('covid_tracer');
Route::get('/covid_tracer_q', 'MainpageController@covid_tracer_q')->name('covid_tracer_q');
Route::get('/covid_tracer_q_submit', 'MainpageController@covid_tracer_q_submit')->name('covid_tracer_q_submit');
Route::get('/covid_tracer_q_done', 'MainpageController@covid_tracer_q_done')->name('covid_tracer_q_done');

/*Pass Scheduler*/
Route::get('/ps_search', 'MainpageController@ps_search')->name('ps_search');
Route::get('/ps_location', 'MainpageController@ps_location')->name('ps_location');
Route::post('/ps_location_update/{id}', 'MainpageController@ps_location_update')->name('ps_location_update');

/*Mobile Seller Locator*/
Route::get('/msl', 'MainpageController@msl')->name('msl');
Route::get('/msl_product', 'MainpageController@msl_product')->name('msl_product');

Route::get('/msl_product_created/{id}', 'MainpageController@msl_product')->name('msl_product_created');

Route::get('/msl_seller', 'MainpageController@msl_seller')->name('msl_seller');
Route::get('/msl_seller_create', 'MainpageController@msl_seller_create')->name('msl_seller_create');

Route::get('/msl_item/{id}', 'MainpageController@msl_item')->name('msl_item');

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});