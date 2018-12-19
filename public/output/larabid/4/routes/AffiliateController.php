Route::get('affiliate/index', 'AffiliateController@index')->name('affiliate.index');
Route::get('affiliate/create', 'AffiliateController@create')->name('affiliate.create');
Route::post('affiliate/store', 'AffiliateController@store')->name('affiliate.store');
Route::get('affiliate/show/{id}', 'AffiliateController@show')->name('affiliate.show');
Route::get('affiliate/edit/{id}', 'AffiliateController@edit')->name('affiliate.edit');
Route::patch('affiliate/update/{id}', 'AffiliateController@update')->name('affiliate.update');
Route::delete('affiliate/destroy/{id}', 'AffiliateController@destroy')->name('affiliate.destroy');