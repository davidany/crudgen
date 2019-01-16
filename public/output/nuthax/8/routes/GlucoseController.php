Route::get('glucose/index', 'GlucoseController@index')->name('glucose.index');
Route::get('glucose/create', 'GlucoseController@create')->name('glucose.create');
Route::post('glucose/store', 'GlucoseController@store')->name('glucose.store');
Route::get('glucose/show/{id}', 'GlucoseController@show')->name('glucose.show');
Route::get('glucose/edit/{id}', 'GlucoseController@edit')->name('glucose.edit');
Route::patch('glucose/update/{id}', 'GlucoseController@update')->name('glucose.update');
Route::delete('glucose/destroy/{id}', 'GlucoseController@destroy')->name('glucose.destroy');