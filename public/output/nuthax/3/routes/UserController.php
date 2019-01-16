Route::get('user/index', 'UserController@index')->name('user.index');
Route::get('user/create', 'UserController@create')->name('user.create');
Route::post('user/store', 'UserController@store')->name('user.store');
Route::get('user/show/{id}', 'UserController@show')->name('user.show');
Route::get('user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::patch('user/update/{id}', 'UserController@update')->name('user.update');
Route::delete('user/destroy/{id}', 'UserController@destroy')->name('user.destroy');