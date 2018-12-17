Route::get('visitor-variable/index', 'VisitorVariableController@index')->name('visitor-variable.index');
Route::get('visitor-variable/create', 'VisitorVariableController@create')->name('visitor-variable.create');
Route::post('visitor-variable/store', 'VisitorVariableController@store')->name('visitor-variable.store');
Route::get('visitor-variable/show/{id}', 'VisitorVariableController@show')->name('visitor-variable.show');
Route::get('visitor-variable/edit/{id}', 'VisitorVariableController@edit')->name('visitor-variable.edit');
Route::patch('visitor-variable/update/{id}', 'VisitorVariableController@update')->name('visitor-variable.update');
Route::delete('visitor-variable/destroy/{id}', 'VisitorVariableController@destroy')->name('visitor-variable.destroy');