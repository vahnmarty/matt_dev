<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'contacts'], function(){
    Route::get('/', Contacts\ManageContacts::class);
});
