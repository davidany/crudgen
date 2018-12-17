Route::get('concert/index', 'ConcertController@index')->name('concert.index');
Route::get('concert/create', 'ConcertController@create')->name('concert.create');
Route::post('concert/store', 'ConcertController@store')->name('concert.store');
Route::get('concert/show/{id}', 'ConcertController@show')->name('concert.show');
Route::get('concert/edit/{id}', 'ConcertController@edit')->name('concert.edit');
Route::patch('concert/update/{id}', 'ConcertController@update')->name('concert.update');
Route::delete('concert/destroy/{id}', 'ConcertController@destroy')->name('concert.destroy');