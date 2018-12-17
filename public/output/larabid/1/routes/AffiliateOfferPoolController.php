Route::get('affiliate-offer-pool/index', 'AffiliateOfferPoolController@index')->name('affiliate-offer-pool.index');
Route::get('affiliate-offer-pool/create', 'AffiliateOfferPoolController@create')->name('affiliate-offer-pool.create');
Route::post('affiliate-offer-pool/store', 'AffiliateOfferPoolController@store')->name('affiliate-offer-pool.store');
Route::get('affiliate-offer-pool/show/{id}', 'AffiliateOfferPoolController@show')->name('affiliate-offer-pool.show');
Route::get('affiliate-offer-pool/edit/{id}', 'AffiliateOfferPoolController@edit')->name('affiliate-offer-pool.edit');
Route::patch('affiliate-offer-pool/update/{id}', 'AffiliateOfferPoolController@update')->name('affiliate-offer-pool.update');
Route::delete('affiliate-offer-pool/destroy/{id}', 'AffiliateOfferPoolController@destroy')->name('affiliate-offer-pool.destroy');