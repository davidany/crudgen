Route::get('api-offer-log/index', 'ApiOfferLogController@index')->name('api-offer-log.index');
Route::get('api-offer-log/create', 'ApiOfferLogController@create')->name('api-offer-log.create');
Route::post('api-offer-log/store', 'ApiOfferLogController@store')->name('api-offer-log.store');
Route::get('api-offer-log/show/{id}', 'ApiOfferLogController@show')->name('api-offer-log.show');
Route::get('api-offer-log/edit/{id}', 'ApiOfferLogController@edit')->name('api-offer-log.edit');
Route::patch('api-offer-log/update/{id}', 'ApiOfferLogController@update')->name('api-offer-log.update');
Route::delete('api-offer-log/destroy/{id}', 'ApiOfferLogController@destroy')->name('api-offer-log.destroy');