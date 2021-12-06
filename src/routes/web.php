<?php
Route::group(['namespace'=>'Kaream\Contact\Http\Controllers'],function (){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@save');
});
