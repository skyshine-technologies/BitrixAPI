<?php
use Illuminate\Filesystem\Filesystem;
use Skyshinein31\Bitrix\BitrixController;

Route::post('install', [BitrixController::class, 'install']);

Route::get('checkserver', function() {
    CRest::checkServer();
});

Route::get('calc', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Skyshinein31\Bitrix\BitrixController@add');
Route::get('subtract/{a}/{b}', 'Skyshinein31\Bitrix\BitrixController@subtract');