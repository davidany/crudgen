Route::get('password-reset/index', 'PasswordResetController@index')->name('password-reset.index');
Route::get('password-reset/create', 'PasswordResetController@create')->name('password-reset.create');
Route::post('password-reset/store', 'PasswordResetController@store')->name('password-reset.store');
Route::get('password-reset/show/{id}', 'PasswordResetController@show')->name('password-reset.show');
Route::get('password-reset/edit/{id}', 'PasswordResetController@edit')->name('password-reset.edit');
Route::patch('password-reset/update/{id}', 'PasswordResetController@update')->name('password-reset.update');
Route::delete('password-reset/destroy/{id}', 'PasswordResetController@destroy')->name('password-reset.destroy');