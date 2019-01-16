Route::get('food/index', 'FoodController@index')->name('food.index');
Route::get('food/create', 'FoodController@create')->name('food.create');
Route::post('food/store', 'FoodController@store')->name('food.store');
Route::get('food/show/{id}', 'FoodController@show')->name('food.show');
Route::get('food/edit/{id}', 'FoodController@edit')->name('food.edit');
Route::patch('food/update/{id}', 'FoodController@update')->name('food.update');
Route::delete('food/destroy/{id}', 'FoodController@destroy')->name('food.destroy');