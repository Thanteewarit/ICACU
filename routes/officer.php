<?php
// //Menu officer 

Route::get('/officer/dashboard','officer\DashboardController@index')->name('officer.dashboard.index'); 

Route::get('/officer/protocol-list','officer\ListController@index')->name('officer.protocol_list.index');

Route::get('/officer/protocol-view/{id?}','officer\ProtocolViewController@index')->name('officer.protocol_view.index');

Route::get('/officer/protocol-view/update/{id?}','officer\ChangeStatusController@update')->name('officer.protocol_view.update');
Route::get('/officer/protocol-view/reply/{id?}','officer\ChangeStatusController@reply')->name('officer.protocol_view.reply');
Route::get('/officer/protocol-view/replySecretary/{id?}','officer\ChangeStatusController@replySecretary')->name('officer.protocol_view.replySecretary');

Route::get('/officer/protocol-view/rewnew/{id?}','officer\ChangeStatusController@rewnew')->name('officer.protocol_view.rewnew');
Route::post('/officer/protocol-view/rewnewFale','officer\ChangeStatusController@rewnewFale')->name('officer.protocol_view.rewnewFale');

Route::get('/officer/protocol-view/replyEdit/{id?}','officer\ChangeStatusController@replyEdit')->name('officer.protocol_view.replyEdit');

Route::post('/officer/president/create','officer\ChangeStatusController@create')->name('officer.president.create');
Route::post('/officer/SendtoUser','officer\ChangeStatusController@SendtoUser')->name('officer.SendtoUser');

Route::post('/officer/reviewer/update','officer\ReviewerControllers@update')->name('officer.reviewer.update');

Route::post('/officer/reviewer/opic01','officer\ReviewerControllers@create')->name('officer.reviewer.create');

Route::get('/officer/president/reviewer','officer\ProtocolViewController@reviewer')->name('officer.president.reviewer');
Route::post('/officer/president/reviewerDel','officer\ProtocolViewController@reviewerDel')->name('officer.president.reviewerDel');
