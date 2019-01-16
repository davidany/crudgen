Route::get('ketone/index', 'KetoneController@index')->name('ketone.index');
Route::get('ketone/create', 'KetoneController@create')->name('ketone.create');
Route::post('ketone/store', 'KetoneController@store')->name('ketone.store');
Route::get('ketone/show/{id}', 'KetoneController@show')->name('ketone.show');
Route::get('ketone/edit/{id}', 'KetoneController@edit')->name('ketone.edit');
Route::patch('ketone/update/{id}', 'KetoneController@update')->name('ketone.update');
Route::delete('ketone/destroy/{id}', 'KetoneController@destroy')->name('ketone.destroy');