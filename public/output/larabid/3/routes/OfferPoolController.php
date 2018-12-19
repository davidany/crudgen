Route::get('offer-pool/index', 'OfferPoolController@index')->name('offer-pool.index');
Route::get('offer-pool/create', 'OfferPoolController@create')->name('offer-pool.create');
Route::post('offer-pool/store', 'OfferPoolController@store')->name('offer-pool.store');
Route::get('offer-pool/show/{id}', 'OfferPoolController@show')->name('offer-pool.show');
Route::get('offer-pool/edit/{id}', 'OfferPoolController@edit')->name('offer-pool.edit');
Route::patch('offer-pool/update/{id}', 'OfferPoolController@update')->name('offer-pool.update');
Route::delete('offer-pool/destroy/{id}', 'OfferPoolController@destroy')->name('offer-pool.destroy');