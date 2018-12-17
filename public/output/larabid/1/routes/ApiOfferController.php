Route::get('api-offer/index', 'ApiOfferController@index')->name('api-offer.index');
Route::get('api-offer/create', 'ApiOfferController@create')->name('api-offer.create');
Route::post('api-offer/store', 'ApiOfferController@store')->name('api-offer.store');
Route::get('api-offer/show/{id}', 'ApiOfferController@show')->name('api-offer.show');
Route::get('api-offer/edit/{id}', 'ApiOfferController@edit')->name('api-offer.edit');
Route::patch('api-offer/update/{id}', 'ApiOfferController@update')->name('api-offer.update');
Route::delete('api-offer/destroy/{id}', 'ApiOfferController@destroy')->name('api-offer.destroy');