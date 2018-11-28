<?php

Route::group(['prefix' => 'kalkulator', 'namespace' => 'YudiAndela\Kalkulator\Controllers', 'middleware' => ['web']], function () {
    Route::get('/', 'KalkulatorController@index')->name('kalkulator.index');
    Route::get('/tambah/{a}/{b}', 'KalkulatorController@tambah')->name('kalkulator.tambah');
    Route::get('/kurang/{a}/{b}', 'KalkulatorController@kurang')->name('kalkulator.kurang');
    Route::get('/bagi/{a}/{b}', 'KalkulatorController@bagi')->name('kalkulator.bagi');
    Route::get('/kali/{a}/{b}', 'KalkulatorController@kali')->name('kalkulator.kali');
});
