Route::get('path-variable/index', 'PathVariableController@index')->name('path-variable.index');
Route::get('path-variable/create', 'PathVariableController@create')->name('path-variable.create');
Route::post('path-variable/store', 'PathVariableController@store')->name('path-variable.store');
Route::get('path-variable/show/{id}', 'PathVariableController@show')->name('path-variable.show');
Route::get('path-variable/edit/{id}', 'PathVariableController@edit')->name('path-variable.edit');
Route::patch('path-variable/update/{id}', 'PathVariableController@update')->name('path-variable.update');
Route::delete('path-variable/destroy/{id}', 'PathVariableController@destroy')->name('path-variable.destroy');