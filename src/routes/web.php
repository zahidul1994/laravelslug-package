<?php
use Illuminate\Support\Facades\Route;

// Route::get('makesulg', function () {
//       return view('laravelslug::laravelslug');
// });

Route::group([
    'namespace'=> 'Sohibd\Laravelslug\Http\Controllers'
     ], function () {
        Route::get('makesulg', 'SlugController@index')->name('makesulg');
        Route::post('makesulg', 'SlugController@store');

});


