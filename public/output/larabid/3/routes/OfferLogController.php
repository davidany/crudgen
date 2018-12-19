Route::get('offer-log/index', 'OfferLogController@index')->name('offer-log.index');
Route::get('offer-log/create', 'OfferLogController@create')->name('offer-log.create');
Route::post('offer-log/store', 'OfferLogController@store')->name('offer-log.store');
Route::get('offer-log/show/{id}', 'OfferLogController@show')->name('offer-log.show');
Route::get('offer-log/edit/{id}', 'OfferLogController@edit')->name('offer-log.edit');
Route::patch('offer-log/update/{id}', 'OfferLogController@update')->name('offer-log.update');
Route::delete('offer-log/destroy/{id}', 'OfferLogController@destroy')->name('offer-log.destroy');