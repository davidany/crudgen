Route::get('invitation/index', 'InvitationController@index')->name('invitation.index');
Route::get('invitation/create', 'InvitationController@create')->name('invitation.create');
Route::post('invitation/store', 'InvitationController@store')->name('invitation.store');
Route::get('invitation/show/{id}', 'InvitationController@show')->name('invitation.show');
Route::get('invitation/edit/{id}', 'InvitationController@edit')->name('invitation.edit');
Route::patch('invitation/update/{id}', 'InvitationController@update')->name('invitation.update');
Route::delete('invitation/destroy/{id}', 'InvitationController@destroy')->name('invitation.destroy');