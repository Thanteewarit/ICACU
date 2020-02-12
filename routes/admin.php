<?php
//admin.home
Route::get('/admin/home', 'admin\UserAllController@index')->name('admin.home.index');
Route::post('/admin/home/get','admin\UserAllController@get')->name('admin.home.get');
Route::post('/admin/home/edit','admin\UserAllController@edit')->name('admin.home.edit');
Route::post('/admin/home/create','admin\UserAllController@create')->name('admin.home.create');

Route::get('/admin/approve', 'admin\UserAllController@show')->name('admin.approve.show');
Route::post('/admin/approveed','admin\UserAllController@approveed')->name('admin.approveed');

Route::get('/admin/userstatus', 'admin\UserstatusController@index')->name('admin.userstatus.index'); 

Route::get('/admin/animal-type', 'admin\AnimalController@index')->name('admin.animal_type.index'); 


Route::get('/admin/animal', 'admin\AdminController@index')->name('admin.animal'); 
Route::get('/admin/animalcommon', 'admin\AdminController@showAnimalCommon')->name('admin.animalcommon'); 
Route::post('/admin/animalcommon/add','admin\AdminController@addAnimalCommon')->name('admin.animalcommon.add');
Route::post('/admin/animalcommon/edit','admin\AdminController@editAnimalCommon')->name('admin.animalcommon.edit');

Route::get('/admin/animalStock', 'admin\AdminController@showAnimalStock')->name('admin.animalStock');
Route::post('/admin/animalStock/add','admin\AdminController@addAnimalStock')->name('admin.animalStock.add');
Route::post('/admin/animalStock/edit','admin\AdminController@editAnimalStock')->name('admin.animalStock.edit');
Route::post('/admin/Ajax/getAnimals_type','admin\AdminController@getAnimals_type')->name('admin.Ajax.getAnimals_type');
Route::post('/admin/Ajax/gatAnimal_stock','admin\AdminController@gatAnimal_stock')->name('admin.Ajax.gatAnimal_stock');


Route::post('/anim/get/userstatus', 'admin\AdminController@getUserstatus')->name('anima.get.userstatus');
Route::post('/anim/get/userstatusEdit', 'admin\AdminController@userstatusEdit')->name('anima.get.userstatusEdit');


Route::post('/admin/animaltype/create','admin\AdminController@animaltype_create')->name('admin.animaltype.create');
Route::post('/admin/animal/create','admin\AdminController@animalcreate')->name('admin.animal.create');
Route::post('/animalShow', 'admin\AdminController@animalShow')->name('animalShow');
Route::post('/AnimalTypeGet', 'admin\AdminController@AnimalTypeGet')->name('AnimalTypeGet');
Route::post('/animalTypeEdit', 'admin\AdminController@animalTypeEdit')->name('animalTypeEdit');


Route::get('/admin/affiliationType', 'admin\AdminController@affiliationTypeShow')->name('admin.affiliationType'); 
Route::post('/admin/affiliationTypeAdd', 'admin\AdminController@affiliationTypeAdd')->name('admin.affiliationTypeAdd'); 
Route::post('/admin/affiliationTypeGet', 'admin\AdminController@affiliationTypeGet')->name('admin.affiliationTypeGet');
Route::post('/admin/affiliationTypeEdit', 'admin\AdminController@affiliationTypeEdit')->name('admin.affiliationTypeEdit'); 


Route::get('/admin/affiliation', 'admin\AdminController@affiliationShow')->name('admin.affiliation'); 
Route::post('/admin/affiliationAdd', 'admin\AdminController@affiliationAdd')->name('admin.affiliationAdd'); 
Route::post('/admin/affiliationGet', 'admin\AdminController@affiliationGet')->name('admin.affiliationGet');
Route::post('/admin/affiliationEdit', 'admin\AdminController@affiliationEdit')->name('admin.affiliationEdit');


Route::post('/admin/animal/edit','admin\AdminController@animalEdit')->name('admin.animal.edit');


Route::get('/admin/committee/index','admin\CommitteesControllers@index')->name('admin.committee.index');
Route::post('/admin/committee/create','admin\CommitteesControllers@create')->name('admin.committee.create');
Route::post('/admin/committee/show','admin\CommitteesControllers@show')->name('admin.committee.show');
Route::post('/admin/committee/edit','admin\CommitteesControllers@edit')->name('admin.committee.edit');

Route::get('/index', 'HomeController@index')->name('index');
Route::post('/checkEmail','UserAllController@checkEmail')->name('checkEmail');
Route::post('/admin/home/show','admin\UserAllController@show')->name('admin.home.show');
// Route::post('/admin/home/edit','UserAllController@edit')->name('admin.home.edit');

