Route::get('hash/index', 'HashController@index')->name('hash.index');
Route::get('hash/create', 'HashController@create')->name('hash.create');
Route::post('hash/store', 'HashController@store')->name('hash.store');
Route::get('hash/show/{id}', 'HashController@show')->name('hash.show');
Route::get('hash/edit/{id}', 'HashController@edit')->name('hash.edit');
Route::patch('hash/update/{id}', 'HashController@update')->name('hash.update');
Route::delete('hash/destroy/{id}', 'HashController@destroy')->name('hash.destroy');