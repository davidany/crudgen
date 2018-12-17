Route::get('attendee-message/index', 'AttendeeMessageController@index')->name('attendee-message.index');
Route::get('attendee-message/create', 'AttendeeMessageController@create')->name('attendee-message.create');
Route::post('attendee-message/store', 'AttendeeMessageController@store')->name('attendee-message.store');
Route::get('attendee-message/show/{id}', 'AttendeeMessageController@show')->name('attendee-message.show');
Route::get('attendee-message/edit/{id}', 'AttendeeMessageController@edit')->name('attendee-message.edit');
Route::patch('attendee-message/update/{id}', 'AttendeeMessageController@update')->name('attendee-message.update');
Route::delete('attendee-message/destroy/{id}', 'AttendeeMessageController@destroy')->name('attendee-message.destroy');