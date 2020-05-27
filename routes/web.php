<?php


	/**
	*	Routes public	
	*
	*/
	Route::get('/', 'Admin\UserController@index')->name('home.index');

	/**
	*	Routes Register	
	*
	*/
	Auth::routes();
	Route::get('/create/user', 'Site\RegisterController@index')->name('new.plan');
	Route::get('/plan/{url}', 'Site\RegisterController@plan')->name('plan.subscription');
	Route::get('/sair', 'Site\RegisterController@logout')->middleware('auth')->name('logout');



Route::prefix('admin')
		->namespace('admin')
		->group(function() {


			Route::get('test-acl', function() {
				dd(auth()->user()->permissions());
			});


    /**
     * Role x User
     */
    Route::get('users/{id}/role/{idRole}/detach', 'ACL\RoleUserController@detachRoleUser')->name('users.role.detach');
    Route::post('users/{id}/roles', 'ACL\RoleUserController@attachRolesUser')->name('users.roles.attach');
    Route::any('users/{id}/roles/create', 'ACL\RoleUserController@rolesAvailable')->name('users.roles.available');
    Route::get('users/{id}/roles', 'ACL\RoleUserController@roles')->name('users.roles');
    Route::get('roles/{id}/users', 'ACL\RoleUserController@users')->name('roles.users');

    /**
     * Permission x Role
     */
    Route::get('roles/{id}/permission/{idPermission}/detach', 'ACL\PermissionRoleController@detachPermissionRole')->name('roles.permission.detach');
    Route::post('roles/{id}/permissions', 'ACL\PermissionRoleController@attachPermissionsRole')->name('roles.permissions.attach');
    Route::any('roles/{id}/permissions/create', 'ACL\PermissionRoleController@permissionsAvailable')->name('roles.permissions.available');
    Route::get('roles/{id}/permissions', 'ACL\PermissionRoleController@permissions')->name('roles.permissions');
    Route::get('permissions/{id}/role', 'ACL\PermissionRoleController@roles')->name('permissions.roles');

     /**
     * Routes Role
     */
    Route::any('roles/search', 'ACL\RoleController@search')->name('roles.search');
    Route::resource('roles', 'ACL\RoleController');

	/**
     * Routes Users
     */
    Route::any('users/search', 'UserController@search')->name('users.search');
    Route::resource('users', 'UserController');
	

	

	/**
	* 	Routes Permissions
	*/
	Route::any('permissions/search', 'ACL\PermissionController@search')->name('permissions.search');
	Route::resource('permissions', 'ACL\PermissionController');

			
	
});



