Route::get('telescope-entries-tag/index', 'TelescopeEntriesTagController@index')->name('telescope-entries-tag.index');
Route::get('telescope-entries-tag/create', 'TelescopeEntriesTagController@create')->name('telescope-entries-tag.create');
Route::post('telescope-entries-tag/store', 'TelescopeEntriesTagController@store')->name('telescope-entries-tag.store');
Route::get('telescope-entries-tag/show/{id}', 'TelescopeEntriesTagController@show')->name('telescope-entries-tag.show');
Route::get('telescope-entries-tag/edit/{id}', 'TelescopeEntriesTagController@edit')->name('telescope-entries-tag.edit');
Route::patch('telescope-entries-tag/update/{id}', 'TelescopeEntriesTagController@update')->name('telescope-entries-tag.update');
Route::delete('telescope-entries-tag/destroy/{id}', 'TelescopeEntriesTagController@destroy')->name('telescope-entries-tag.destroy');