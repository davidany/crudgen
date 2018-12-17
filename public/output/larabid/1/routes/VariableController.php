Route::get('variable/index', 'VariableController@index')->name('variable.index');
Route::get('variable/create', 'VariableController@create')->name('variable.create');
Route::post('variable/store', 'VariableController@store')->name('variable.store');
Route::get('variable/show/{id}', 'VariableController@show')->name('variable.show');
Route::get('variable/edit/{id}', 'VariableController@edit')->name('variable.edit');
Route::patch('variable/update/{id}', 'VariableController@update')->name('variable.update');
Route::delete('variable/destroy/{id}', 'VariableController@destroy')->name('variable.destroy');