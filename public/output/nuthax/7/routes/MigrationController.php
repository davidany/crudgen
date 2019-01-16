Route::get('migration/index', 'MigrationController@index')->name('migration.index');
Route::get('migration/create', 'MigrationController@create')->name('migration.create');
Route::post('migration/store', 'MigrationController@store')->name('migration.store');
Route::get('migration/show/{id}', 'MigrationController@show')->name('migration.show');
Route::get('migration/edit/{id}', 'MigrationController@edit')->name('migration.edit');
Route::patch('migration/update/{id}', 'MigrationController@update')->name('migration.update');
Route::delete('migration/destroy/{id}', 'MigrationController@destroy')->name('migration.destroy');