Route::get('offer/index', 'OfferController@index')->name('offer.index');
Route::get('offer/create', 'OfferController@create')->name('offer.create');
Route::post('offer/store', 'OfferController@store')->name('offer.store');
Route::get('offer/show/{id}', 'OfferController@show')->name('offer.show');
Route::get('offer/edit/{id}', 'OfferController@edit')->name('offer.edit');
Route::patch('offer/update/{id}', 'OfferController@update')->name('offer.update');
Route::delete('offer/destroy/{id}', 'OfferController@destroy')->name('offer.destroy');