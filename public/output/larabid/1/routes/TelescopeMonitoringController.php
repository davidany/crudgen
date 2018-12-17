Route::get('telescope-monitoring/index', 'TelescopeMonitoringController@index')->name('telescope-monitoring.index');
Route::get('telescope-monitoring/create', 'TelescopeMonitoringController@create')->name('telescope-monitoring.create');
Route::post('telescope-monitoring/store', 'TelescopeMonitoringController@store')->name('telescope-monitoring.store');
Route::get('telescope-monitoring/show/{id}', 'TelescopeMonitoringController@show')->name('telescope-monitoring.show');
Route::get('telescope-monitoring/edit/{id}', 'TelescopeMonitoringController@edit')->name('telescope-monitoring.edit');
Route::patch('telescope-monitoring/update/{id}', 'TelescopeMonitoringController@update')->name('telescope-monitoring.update');
Route::delete('telescope-monitoring/destroy/{id}', 'TelescopeMonitoringController@destroy')->name('telescope-monitoring.destroy');