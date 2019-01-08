Route::get('project/index', 'ProjectController@index')->name('project.index');
Route::get('project/create', 'ProjectController@create')->name('project.create');
Route::post('project/store', 'ProjectController@store')->name('project.store');
Route::get('project/show/{id}', 'ProjectController@show')->name('project.show');
Route::get('project/edit/{id}', 'ProjectController@edit')->name('project.edit');
Route::patch('project/update/{id}', 'ProjectController@update')->name('project.update');
Route::delete('project/destroy/{id}', 'ProjectController@destroy')->name('project.destroy');