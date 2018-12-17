Route::get('relationship/index', 'RelationshipController@index')->name('relationship.index');
Route::get('relationship/create', 'RelationshipController@create')->name('relationship.create');
Route::post('relationship/store', 'RelationshipController@store')->name('relationship.store');
Route::get('relationship/show/{id}', 'RelationshipController@show')->name('relationship.show');
Route::get('relationship/edit/{id}', 'RelationshipController@edit')->name('relationship.edit');
Route::patch('relationship/update/{id}', 'RelationshipController@update')->name('relationship.update');
Route::delete('relationship/destroy/{id}', 'RelationshipController@destroy')->name('relationship.destroy');