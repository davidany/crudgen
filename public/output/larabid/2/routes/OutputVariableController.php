Route::get('output-variable/index', 'OutputVariableController@index')->name('output-variable.index');
Route::get('output-variable/create', 'OutputVariableController@create')->name('output-variable.create');
Route::post('output-variable/store', 'OutputVariableController@store')->name('output-variable.store');
Route::get('output-variable/show/{id}', 'OutputVariableController@show')->name('output-variable.show');
Route::get('output-variable/edit/{id}', 'OutputVariableController@edit')->name('output-variable.edit');
Route::patch('output-variable/update/{id}', 'OutputVariableController@update')->name('output-variable.update');
Route::delete('output-variable/destroy/{id}', 'OutputVariableController@destroy')->name('output-variable.destroy');