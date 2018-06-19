<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "web", "auth" and "admin" middleware groups. Enjoy building your Admin!
|
*/

/**
 * admin url
 */
Route::get('/', ['uses' => 'AdminController@index', 'as' => 'admin.index']);
Route::get('/settings', ['uses' => 'AdminController@settings', 'as' => 'admin.settings']);
Route::post('/settings', ['uses' => 'AdminController@saveSettings', 'as' => 'admin.save-settings']);
Route::post('/upload/image', ['uses' => 'ImageController@uploadImage', 'as' => 'upload.image']);
Route::delete('/delete/file', ['uses' => 'FileController@deleteFileLocalFile', 'as' => 'delete.file']);
Route::post('/upload/file', ['uses' => 'FileController@uploadFile', 'as' => 'upload.file']);


/**
 * admin uri
 */
Route::get('/posts', ['uses' => 'AdminController@posts', 'as' => 'admin.posts']);
Route::get('/failed-jobs', ['uses' => 'AdminController@failedJobs', 'as' => 'admin.failed-jobs']);
Route::get('/comments', ['uses' => 'AdminController@comments', 'as' => 'admin.comments']);
Route::get('/tags', ['uses' => 'AdminController@tags', 'as' => 'admin.tags']);
Route::get('/users', ['uses' => 'AdminController@users', 'as' => 'admin.users']);
Route::get('/pages', ['uses' => 'AdminController@pages', 'as' => 'admin.pages']);
Route::get('/categories', ['uses' => 'AdminController@categories', 'as' => 'admin.categories']);
Route::get('/docentes', ['uses' => 'AdminController@docentes', 'as' => 'admin.docentes']);
Route::get('/images', ['uses' => 'ImageController@images', 'as' => 'admin.images']);
Route::get('/files', ['uses' => 'FileController@files', 'as' => 'admin.files']);
Route::get('/ips', ['uses' => 'AdminController@ips', 'as' => 'admin.ips']);

/**
 * Noticia
 */

Route::group(['prefix' => 'noticia', 'as' => 'admin.notice.'], function(){
    Route::get('/', ['uses' => 'AdminController@notice', 'as' => 'index']);
    Route::get('/create', ['uses' => 'AdminController@noticeCreate', 'as' => 'create']);
    Route::get('/{slug}', ['uses' => 'AdminController@noticeshow', 'as' => 'show']);
    Route::post('/store', ['uses' => 'AdminController@noticeStore', 'as' => 'store']);
    Route::get('/{id}/edit', ['uses' => 'AdminController@noticeEdit', 'as' => 'edit']);
    Route::put('/{id}/update', ['uses' => 'AdminController@noticeUpdate', 'as' => 'update']);
    Route::delete('/{id}/destroy', ['uses' => 'AdminController@noticeDestroy', 'as' => 'destroy']);
});
/**
 * comment
 */
Route::post('/comment/{comment}/restore', ['uses' => 'CommentController@restore', 'as' => 'comment.restore']);

Route::get('/_debugbar/assets/stylesheets', [
    'as' => 'debugbar-css',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
]);

Route::get('/_debugbar/assets/javascript', [
    'as' => 'debugbar-js',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
]);

/***
 * post
 */

Route::post('/post/{post}/restore', ['uses' => 'PostController@restore', 'as' => 'post.restore']);
Route::get('/post/{slug}/preview', ['uses' => 'PostController@preview', 'as' => 'post.preview']);
Route::post('/post/{post}/publish', ['uses' => 'PostController@publish', 'as' => 'post.publish']);
Route::get('/post/{post}/download', ['uses' => 'PostController@download', 'as' => 'post.download']);
Route::post('/post/{post}/config', ['uses' => 'PostController@updateConfig', 'as' => 'post.config']);

/**
 * tag
 */
Route::delete('/tag/{tag}', ['uses' => 'TagController@destroy', 'as' => 'tag.destroy']);
Route::post('/tag', ['uses' => 'TagController@store', 'as' => 'tag.store']);

/**
 * admin resource
 */
Route::resource('post', 'PostController', ['except' => ['show', 'index']]);
Route::resource('category', 'CategoryController', ['except' => ['index', 'show', 'create']]);
Route::resource('docente', 'DocenteController', ['except' => ['index', 'show', 'create']]);
Route::resource('page', 'PageController', ['except' => ['show', 'index']]);

/**
 * IPS
 */
Route::delete('/ip/{ip}/toggle', ['uses' => 'IpController@toggleBlock', 'as' => 'ip.block']);
Route::delete('/ip/{ip}', ['uses' => 'IpController@destroy', 'as' => 'ip.delete']);

/**
 * failed jobs
 */

Route::delete('/failed-jobs', ['uses' => 'AdminController@flushFailedJobs', 'as' => 'admin.failed-jobs.flush']);