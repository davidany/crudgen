Route::get('db-credential/index', 'DbCredentialController@index')->name('db-credential.index');
Route::get('db-credential/create', 'DbCredentialController@create')->name('db-credential.create');
Route::post('db-credential/store', 'DbCredentialController@store')->name('db-credential.store');
Route::get('db-credential/show/{id}', 'DbCredentialController@show')->name('db-credential.show');
Route::get('db-credential/edit/{id}', 'DbCredentialController@edit')->name('db-credential.edit');
Route::patch('db-credential/update/{id}', 'DbCredentialController@update')->name('db-credential.update');
Route::delete('db-credential/destroy/{id}', 'DbCredentialController@destroy')->name('db-credential.destroy');