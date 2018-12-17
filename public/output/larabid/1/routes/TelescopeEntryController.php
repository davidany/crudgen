Route::get('telescope-entry/index', 'TelescopeEntryController@index')->name('telescope-entry.index');
Route::get('telescope-entry/create', 'TelescopeEntryController@create')->name('telescope-entry.create');
Route::post('telescope-entry/store', 'TelescopeEntryController@store')->name('telescope-entry.store');
Route::get('telescope-entry/show/{id}', 'TelescopeEntryController@show')->name('telescope-entry.show');
Route::get('telescope-entry/edit/{id}', 'TelescopeEntryController@edit')->name('telescope-entry.edit');
Route::patch('telescope-entry/update/{id}', 'TelescopeEntryController@update')->name('telescope-entry.update');
Route::delete('telescope-entry/destroy/{id}', 'TelescopeEntryController@destroy')->name('telescope-entry.destroy');