Route::get('path/index', 'PathController@index')->name('path.index');
Route::get('path/create', 'PathController@create')->name('path.create');
Route::post('path/store', 'PathController@store')->name('path.store');
Route::get('path/show/{id}', 'PathController@show')->name('path.show');
Route::get('path/edit/{id}', 'PathController@edit')->name('path.edit');
Route::patch('path/update/{id}', 'PathController@update')->name('path.update');
Route::delete('path/destroy/{id}', 'PathController@destroy')->name('path.destroy');