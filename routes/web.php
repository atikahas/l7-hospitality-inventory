<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['prevent-back-history']], function() {
    Route::get('/', function () {
        return view('welcome');
    });
    
    Auth::routes();
    
    // Route::group(['middleware' => 'auth'], function() {
    // Route::get('/home', 'HomeController@index')->name('home');

        Route::group(['middleware' => 'auth'],function(){
        Route::get('/home', 'HomeController@index');
    
        // ADMIN
        
        Route::get('admin', 'AdminController@index');
        Route::get('admin/users', 'AdminController@users');
        Route::get('admin/users/add', 'AdminController@usersAdd');
        Route::post('admin/users/add', 'AdminController@usersStore');
        Route::get('admin/users/{user}', 'AdminController@usersEdit');
        Route::post('admin/users/{user}', 'AdminController@usersUpdate');
        Route::post('admin/users/{user}/delete', 'AdminController@usersDisable');
    
        Route::get('admin/roles', 'AdminController@roles');
        Route::get('admin/roles/add', 'AdminController@rolesAdd');
        Route::post('admin/roles/add', 'AdminController@rolesStore');
        Route::get('admin/roles/{role}', 'AdminController@rolesEdit');
        Route::post('admin/roles/{role}', 'AdminController@rolesUpdate');
        Route::post('admin/roles/{role}/delete', 'AdminController@rolesDelete');
        
        Route::get('admin/permissions', 'AdminController@permissions');
        Route::get('admin/permissions/add', 'AdminController@permissionsAdd');
        Route::post('admin/permissions/add', 'AdminController@permissionsStore');
        Route::get('admin/permissions/{permission}', 'AdminController@permissionsEdit');
        Route::post('admin/permissions/{permission}', 'AdminController@permissionsUpdate');
        Route::post('admin/permissions/{permission}/delete', 'AdminController@permissionsDelete');
    
        Route::get('admin/meta', 'AdminController@meta');
        Route::get('admin/meta/add', 'AdminController@metaAdd');
        Route::post('admin/meta/add', 'AdminController@metaStore');
        Route::get('admin/meta/{meta}', 'AdminController@metaEdit');
        Route::post('admin/meta/{meta}', 'AdminController@metaUpdate');
        Route::post('admin/meta/{meta}/delete', 'AdminController@metaDelete');
    
        Route::get('admin/metadata', 'AdminController@metaData');
        Route::get('admin/metadata/add', 'AdminController@metaDataAdd');
        Route::post('admin/metadata/add', 'AdminController@metaDataStore');
        Route::get('admin/metadata/{metadata}', 'AdminController@metaDataEdit');
        Route::post('admin/metadata/{metadata}', 'AdminController@metaDataUpdate');
        Route::post('admin/metadata/{metadata}/delete', 'AdminController@metaDataDelete');
        
        //Location
        Route::get('location/view', 'LocationController@index');
        Route::post('location/view', 'LocationController@store');
        Route::get('location/edit/{location}', 'LocationController@edit');
        Route::post('location/edit/{location}', 'LocationController@update');

        //Category
        Route::get('category/view', 'CategoryController@index');
        Route::post('category/category/store', 'CategoryController@store');
        Route::post('category/subcategory/store', 'SubCategoryController@store');
        Route::get('category/edit-category/{category}', 'CategoryController@editCategory');
        Route::get('category/edit-subcategory/{subcategory}', 'SubCategoryController@editSubCategory');
        Route::post('category/edit-category/{category}', 'CategoryController@update');

         //Dropdown
         Route::get('data/getLocation', 'DropdownController@getLocation');
         Route::get('data/getSubLocation', 'DropdownController@getSubLocation');
         Route::get('data/getCategory', 'DropdownController@getCategory');
         Route::get('data/getSubCategory', 'DropdownController@getSubCategory');

         //Item
         Route::get('item', 'ItemController@index');
         Route::get('item/add', 'ItemController@add');
         Route::get('item/report', 'ItemController@report');
         Route::post('item/add/store', 'ItemController@store');
         Route::get('item/view/{item}', 'ItemController@view');
         Route::get('item/edit/{item}', 'ItemController@edit');
         Route::post('item/edit/{item}', 'ItemController@update');

         //Purchasing
         Route::get('purchase', 'PurchaseController@index');
         Route::get('purchase/add', 'PurchaseController@add');
         Route::post('purchase/add/store', 'PurchaseController@store');
         Route::get('purchase/edit/{item}', 'PurchaseController@edit');
         Route::post('purchase/edit/{item}', 'PurchaseController@update');

    });
});
