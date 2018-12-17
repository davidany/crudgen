Route::get('order/index', 'OrderController@index')->name('order.index');
Route::get('order/create', 'OrderController@create')->name('order.create');
Route::post('order/store', 'OrderController@store')->name('order.store');
Route::get('order/show/{id}', 'OrderController@show')->name('order.show');
Route::get('order/edit/{id}', 'OrderController@edit')->name('order.edit');
Route::patch('order/update/{id}', 'OrderController@update')->name('order.update');
Route::delete('order/destroy/{id}', 'OrderController@destroy')->name('order.destroy');