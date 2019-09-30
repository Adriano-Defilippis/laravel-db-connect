<?php


Route::get('/cube/ospiti', 'BDController@getOspiti');

Route::get('/cube/pagamenti', 'BDController@getPagamenti');
Route::get('/cube/pagamenti/des', 'BDController@pagamentiOrderDes');


Route::get('/cube/paganti', 'BDController@getPaganti');
