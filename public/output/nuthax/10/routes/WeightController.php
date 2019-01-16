Route::get('weight/index', 'WeightController@index')->name('weight.index');
Route::get('weight/create', 'WeightController@create')->name('weight.create');
Route::post('weight/store', 'WeightController@store')->name('weight.store');
Route::get('weight/show/{id}', 'WeightController@show')->name('weight.show');
Route::get('weight/edit/{id}', 'WeightController@edit')->name('weight.edit');
Route::patch('weight/update/{id}', 'WeightController@update')->name('weight.update');
Route::delete('weight/destroy/{id}', 'WeightController@destroy')->name('weight.destroy');