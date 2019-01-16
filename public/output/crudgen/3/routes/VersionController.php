Route::get('version/index', 'VersionController@index')->name('version.index');
Route::get('version/create', 'VersionController@create')->name('version.create');
Route::post('version/store', 'VersionController@store')->name('version.store');
Route::get('version/show/{id}', 'VersionController@show')->name('version.show');
Route::get('version/edit/{id}', 'VersionController@edit')->name('version.edit');
Route::patch('version/update/{id}', 'VersionController@update')->name('version.update');
Route::delete('version/destroy/{id}', 'VersionController@destroy')->name('version.destroy');