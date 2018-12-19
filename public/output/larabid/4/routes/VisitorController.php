Route::get('visitor/index', 'VisitorController@index')->name('visitor.index');
Route::get('visitor/create', 'VisitorController@create')->name('visitor.create');
Route::post('visitor/store', 'VisitorController@store')->name('visitor.store');
Route::get('visitor/show/{id}', 'VisitorController@show')->name('visitor.show');
Route::get('visitor/edit/{id}', 'VisitorController@edit')->name('visitor.edit');
Route::patch('visitor/update/{id}', 'VisitorController@update')->name('visitor.update');
Route::delete('visitor/destroy/{id}', 'VisitorController@destroy')->name('visitor.destroy');