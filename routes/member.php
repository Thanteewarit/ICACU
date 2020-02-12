<?php

Route::get('/My/dashboard','member\DashboardController@index')->name('member.dashboard.index');

Route::get('/My/create', function () { return view('member.create'); });

Route::get('/My/register','member\RegisterControllers@index')->name('member.register.index');
Route::post('/My/register/create','member\RegisterControllers@create')->name('member.register.create');


Route::get('/My/protocol-create','member\CreatedocsController@index')->name('member.protocol_create.index');
Route::get('/My/protocol-create/{doc_id?}','member\CreatedocsController@create')->name('member.protocol_create.create');
Route::get('/My/protocol-create/update/{doc_id?}','member\CreatedocsController@update')->name('member.protocol_create.update');

Route::get('/My/protocol-list','member\ListController@index')->name('member.protocol_list.index');
Route::get('/My/protocol-list-view','member\ListViewController@index')->name('member.protocol_list_view.index');

Route::get('/My/protocol-draft','member\DraftController@index')->name('member.protocol_draft.index');
Route::get('/My/protocol-draft-show/{id?}','member\DraftController@show')->name('member.protocol_draft.show');
Route::get('/My/protocol-draft/delect/{id?}','member\DraftController@delect')->name('member.protocol_draft.delect');

Route::get('/My/protocol-show/{id?}','member\ViewDocsController@show')->name('member.protocol.show');

Route::get('/login-member', function () { return view('index'); })->name('login.member');
Route::post('/members/protocol-create/upFile/create','member\ImportFileController@create')->name('member.create.upFile.create');
Route::post('/members/protocol-create/upFile/createNo','member\ImportFileController@createNo')->name('member.create.upFile.createNo');
Route::get('/members/protocol/delectFile/{id?}','member\ImportFileController@delectFile')->name('member.protocol.delectFile');

Route::post('/members/protocol-create/opic01','member\CreatedocsController@updateProtocol_opic01')->name('member.create.updateProtocol_opic01');
Route::post('/members/protocol-create/opic02','member\CreatedocsController@updateProtocol_opic02')->name('member.create.updateProtocol_opic02');
Route::post('/members/protocol-create/opic03','member\CreatedocsController@updateProtocol_opic03')->name('member.create.updateProtocol_opic03');
Route::post('/members/protocol-create/opic04','member\CreatedocsController@updateProtocol_opic04')->name('member.create.updateProtocol_opic04');
Route::post('/members/protocol-create/opic05','member\CreatedocsController@updateProtocol_opic05')->name('member.create.updateProtocol_opic05');
Route::post('/members/protocol-create/opic06','member\CreatedocsController@updateProtocol_opic06')->name('member.create.updateProtocol_opic06');
Route::post('/members/protocol-create/opic07','member\CreatedocsController@updateProtocol_opic07')->name('member.create.updateProtocol_opic07');
Route::post('/members/protocol-create/opic08','member\CreatedocsController@updateProtocol_opic08')->name('member.create.updateProtocol_opic08');
Route::post('/members/protocol-create/opic09','member\CreatedocsController@updateProtocol_opic09')->name('member.create.updateProtocol_opic09');
Route::post('/members/protocol-create/opic10','member\CreatedocsController@updateProtocol_opic10')->name('member.create.updateProtocol_opic10');
Route::post('/members/protocol-create/opic11','member\CreatedocsController@updateProtocol_opic11')->name('member.create.updateProtocol_opic11');
Route::post('/members/protocol-create/opic12','member\CreatedocsController@updateProtocol_opic12')->name('member.create.updateProtocol_opic12');
Route::post('/members/protocol-create/opic13','member\CreatedocsController@updateProtocol_opic13')->name('member.create.updateProtocol_opic13');
Route::post('/members/protocol-create/opic14','member\CreatedocsController@updateProtocol_opic14')->name('member.create.updateProtocol_opic14');
Route::post('/members/protocol-create/opic15','member\CreatedocsController@updateProtocol_opic15')->name('member.create.updateProtocol_opic15');
Route::post('/members/protocol-create/opic16','member\CreatedocsController@updateProtocol_opic16')->name('member.create.updateProtocol_opic16');
Route::post('/members/protocol-create/opic17','member\CreatedocsController@updateProtocol_opic17')->name('member.create.updateProtocol_opic17');
Route::post('/members/protocol-create/opic18','member\CreatedocsController@updateProtocol_opic18')->name('member.create.updateProtocol_opic18');
Route::post('/members/protocol-create/opic19','member\CreatedocsController@updateProtocol_opic19')->name('member.create.updateProtocol_opic19');
Route::post('/members/protocol-create/opic20','member\CreatedocsController@updateProtocol_opic20')->name('member.create.updateProtocol_opic20');
Route::post('/members/protocol-create/opic21','member\CreatedocsController@updateProtocol_opic21')->name('member.create.updateProtocol_opic21');
Route::post('/members/protocol-create/opic22','member\CreatedocsController@updateProtocol_opic22')->name('member.create.updateProtocol_opic22');
Route::post('/members/protocol-create/opic23','member\CreatedocsController@updateProtocol_opic23')->name('member.create.updateProtocol_opic23');
Route::post('/members/protocol-create/opic24','member\CreatedocsController@updateProtocol_opic24')->name('member.create.updateProtocol_opic24');
Route::post('/members/protocol-create/opic25','member\CreatedocsController@updateProtocol_opic25')->name('member.create.updateProtocol_opic25');
Route::post('/members/protocol-create/opic26','member\CreatedocsController@updateProtocol_opic26')->name('member.create.updateProtocol_opic26');
Route::post('/members/protocol-create/opic27','member\CreatedocsController@updateProtocol_opic27')->name('member.create.updateProtocol_opic27');
Route::post('/members/protocol-create/opic28','member\CreatedocsController@updateProtocol_opic28')->name('member.create.updateProtocol_opic28');
Route::post('/members/protocol-create/opic30','member\CreatedocsController@updateProtocol_opic30')->name('member.create.updateProtocol_opic30');

Route::post('/members/protocol-edit/opic01','member\EditeDocsController@editProtocol_opic01')->name('member.edit.Protocol_opic01');
Route::post('/members/protocol-edit/opic02','member\EditeDocsController@editProtocol_opic02')->name('member.edit.Protocol_opic02');
Route::post('/members/protocol-edit/opic03','member\EditeDocsController@editProtocol_opic03')->name('member.edit.Protocol_opic03');
Route::post('/members/protocol-edit/opic04','member\EditeDocsController@editProtocol_opic04')->name('member.edit.Protocol_opic04');
Route::post('/members/protocol-edit/opic05','member\EditeDocsController@editProtocol_opic05')->name('member.edit.Protocol_opic05');
Route::post('/members/protocol-edit/opic06','member\EditeDocsController@editProtocol_opic06')->name('member.edit.Protocol_opic06');
Route::post('/members/protocol-edit/opic07','member\EditeDocsController@editProtocol_opic07')->name('member.edit.Protocol_opic07');
Route::post('/members/protocol-edit/opic08','member\EditeDocsController@editProtocol_opic08')->name('member.edit.Protocol_opic08');
Route::post('/members/protocol-edit/opic09','member\EditeDocsController@editProtocol_opic09')->name('member.edit.Protocol_opic09');
Route::post('/members/protocol-edit/opic10','member\EditeDocsController@editProtocol_opic10')->name('member.edit.Protocol_opic10');
Route::post('/members/protocol-edit/opic11','member\EditeDocsController@editProtocol_opic11')->name('member.edit.Protocol_opic11');
Route::post('/members/protocol-edit/opic12','member\EditeDocsController@editProtocol_opic12')->name('member.edit.Protocol_opic12');
Route::post('/members/protocol-edit/opic13','member\EditeDocsController@editProtocol_opic13')->name('member.edit.Protocol_opic13');
Route::post('/members/protocol-edit/opic14','member\EditeDocsController@editProtocol_opic14')->name('member.edit.Protocol_opic14');
Route::post('/members/protocol-edit/opic15','member\EditeDocsController@editProtocol_opic15')->name('member.edit.Protocol_opic15');
Route::post('/members/protocol-edit/opic16','member\EditeDocsController@editProtocol_opic16')->name('member.edit.Protocol_opic16');
Route::post('/members/protocol-edit/opic17','member\EditeDocsController@editProtocol_opic17')->name('member.edit.Protocol_opic17');
Route::post('/members/protocol-edit/opic18','member\EditeDocsController@editProtocol_opic18')->name('member.edit.Protocol_opic18');
Route::post('/members/protocol-edit/opic19','member\EditeDocsController@editProtocol_opic19')->name('member.edit.Protocol_opic19');
Route::post('/members/protocol-edit/opic20','member\EditeDocsController@editProtocol_opic20')->name('member.edit.Protocol_opic20');
Route::post('/members/protocol-edit/opic21','member\EditeDocsController@editProtocol_opic21')->name('member.edit.Protocol_opic21');
Route::post('/members/protocol-edit/opic22','member\EditeDocsController@editProtocol_opic22')->name('member.edit.Protocol_opic22');
Route::post('/members/protocol-edit/opic23','member\EditeDocsController@editProtocol_opic23')->name('member.edit.Protocol_opic23');
Route::post('/members/protocol-edit/opic24','member\EditeDocsController@editProtocol_opic24')->name('member.edit.Protocol_opic24');
Route::post('/members/protocol-edit/opic25','member\EditeDocsController@editProtocol_opic25')->name('member.edit.Protocol_opic25');
Route::post('/members/protocol-edit/opic26','member\EditeDocsController@editProtocol_opic26')->name('member.edit.Protocol_opic26');
Route::post('/members/protocol-edit/opic27','member\EditeDocsController@editProtocol_opic27')->name('member.edit.Protocol_opic27');
Route::post('/members/protocol-edit/opic28','member\EditeDocsController@editProtocol_opic28')->name('member.edit.Protocol_opic28');
Route::post('/members/protocol-edit/opic29','member\EditeDocsController@editProtocol_opic29')->name('member.edit.Protocol_opic29');
Route::post('/members/protocol-edit/opic30','member\EditeDocsController@editProtocol_opic30')->name('member.edit.Protocol_opic30');

Route::post('/members/protocol-draft/sendDraft','member\ApproveController@sendDraft')->name('member.protocol-draft.sendDraft');

Route::post('/members/protocol/Renew/{id?}','member\ApproveController@Renew')->name('member.protocol.Renew');
Route::post('/members/protocol/secretary','member\EditeDocsController@secretaryShow')->name('member.protocol.secretary');

// Route::get('/member/forgetpassword', function () { return view('member.forget-pass'); });

// Route::post('/member/register/create','MemberController@create')->name('member.register.create');
// Route::get('/member/register','member\RegisterControllers@statusUser')->name('member.register.statusUser');
// Route::post('/member/register/ajax01','MemberController@registerAjax01')->name('member.register.registerAjax01');

// Route::get('/member/protocol-list','Protocol_listController@showDocs')->name('member.protocol_list');
// Route::get('/members/protocol-create', function () { return view('member.create'); });
// Route::get('/member/protocol-draft','member\Protocol_draftController@show')->name('member.protocol_draft.show');

// Route::get('/members/protocol-create/{doc_id?}','member\CreatedocsController@create')->name('member.create.id');
// Route::get('/member/create-create','member\CreatedocsController@showDocs')->name('member.showDocs');




// //Draft
// Route::get('/member/draft-edit/{id?}','member\EditdocsController@show')->name('member.draftEdit');