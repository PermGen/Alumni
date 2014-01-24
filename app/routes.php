<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Super Admin*/       
Route::group(array('before' => 'guest'),function(){
	Route::get('/login',array(
        'as'    =>  'admin-login',
        'uses'  =>  'AdminController@showAdminLogin'
	));

	Route::post('admin/login',array(
        'as'    =>  'admin-login-go',
        'uses'  =>  'AdminController@goLogin'
	));
});

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'),function(){
        
    Route::get('logout',array(
        'as'    =>  'admin-out',
        'uses'  =>  'AdminController@goLogout'
    ));

	Route::get('/admin_dashboard', array(
		'as'	=>	'home',
		'uses'	=>	'AdminController@showAdminDashboard'
	));

	Route::get('/admin_conversations', array(
		'as'	=>	'admin-conversations',
		'uses'	=>	'AdminController@showAdminConversations'
	));

	Route::get('/admin_manage_universities', array(
		'as'	=>	'admin-manage-universities',
		'uses'	=>	'AdminController@showManageAdminUniversities'
	));

	Route::get('/admin_manage_alumni', array(
		'as'	=>	'admin-manage-alumni',
		'uses'	=>	'AdminController@showManageAdminAlumni'
	));

	Route::get('/admin_manage_administrators', array(
		'as'	=>	'admin-manage-admins',
		'uses'	=>	'AdminController@showManageAdminAdministrators'
	));

	Route::get('/admin_statistics', array(
		'as'	=>	'admin-statistics',
		'uses'	=>	'AdminController@showAdminStats'
	));

	
	//Manage Universities

	Route::post('/view_university', array(
            'as'   => 'view-university',
            'uses' => 'AdminController@viewUniversity'
    ));

	Route::post('/add_university', array(
            'as'   => 'add-university',
            'uses' => 'AdminController@addUniversity'
    ));

	Route::get('/add_university_failed', array(
            'as'   => 'add-university-failed',
            'uses' => 'AdminController@addUniversityFailed'
    ));

	Route::get('/add_university_success', array(
            'as'   => 'add-university-success',
            'uses' => 'AdminController@addUniversitySuccess'
    ));
});
/*End Super Admin*/

/*University Admin*/
Route::get('/uadmin_dashboard', array(
	'as'	=>	'univ_admin_home',
	'uses'	=>	'UniversityAdminController@showUAdminDashboard'
));

Route::get('/uadmin_home', array(
	'as'	=>	'univ_admin_dashboard',
	'uses'	=>	'UniversityAdminController@showUAdminDashboard'
));

Route::get('/uadmin_conversations', 'UniversityAdminController@showUAdminConversations');
Route::get('/uadmin_manage_alumni', 'UniversityAdminController@showUManageAdminAlumni');
Route::get('/uadmin_statistics', 'UniversityAdminController@showUAdminStats');
