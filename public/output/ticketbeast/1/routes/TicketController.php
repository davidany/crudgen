Route::get('ticket/index', 'TicketController@index')->name('ticket.index');
Route::get('ticket/create', 'TicketController@create')->name('ticket.create');
Route::post('ticket/store', 'TicketController@store')->name('ticket.store');
Route::get('ticket/show/{id}', 'TicketController@show')->name('ticket.show');
Route::get('ticket/edit/{id}', 'TicketController@edit')->name('ticket.edit');
Route::patch('ticket/update/{id}', 'TicketController@update')->name('ticket.update');
Route::delete('ticket/destroy/{id}', 'TicketController@destroy')->name('ticket.destroy');