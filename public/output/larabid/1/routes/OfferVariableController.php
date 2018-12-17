Route::get('offer-variable/index', 'OfferVariableController@index')->name('offer-variable.index');
Route::get('offer-variable/create', 'OfferVariableController@create')->name('offer-variable.create');
Route::post('offer-variable/store', 'OfferVariableController@store')->name('offer-variable.store');
Route::get('offer-variable/show/{id}', 'OfferVariableController@show')->name('offer-variable.show');
Route::get('offer-variable/edit/{id}', 'OfferVariableController@edit')->name('offer-variable.edit');
Route::patch('offer-variable/update/{id}', 'OfferVariableController@update')->name('offer-variable.update');
Route::delete('offer-variable/destroy/{id}', 'OfferVariableController@destroy')->name('offer-variable.destroy');