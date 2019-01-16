Route::get('check-level/index', 'CheckLevelController@index')->name('check-level.index');
Route::get('check-level/create', 'CheckLevelController@create')->name('check-level.create');
Route::post('check-level/store', 'CheckLevelController@store')->name('check-level.store');
Route::get('check-level/show/{id}', 'CheckLevelController@show')->name('check-level.show');
Route::get('check-level/edit/{id}', 'CheckLevelController@edit')->name('check-level.edit');
Route::patch('check-level/update/{id}', 'CheckLevelController@update')->name('check-level.update');
Route::delete('check-level/destroy/{id}', 'CheckLevelController@destroy')->name('check-level.destroy');