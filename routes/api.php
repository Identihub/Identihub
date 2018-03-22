<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api', 'namespace' => 'Api\V1', 'prefix' => 'v1'], function () {
    Route::get('/me', 'UsersController@me');
    Route::resource('bridges', 'BridgeController');
    Route::patch('bridges/{id}/name', 'BridgeController@updateName');
    Route::resource('bridges.sections', 'SectionController');
    Route::patch('bridges/{bridgeId}/sections/{sectionId}/updateTitle', 'SectionController@updateTitle');
    Route::patch('bridges/{bridgeId}/sections/{sectionId}/updateDescription', 'SectionController@updateDescription');
    Route::post('/bridges/{bridgeId}/icons', 'SourceFileController@storeIcon');
    Route::post('/bridges/{bridgeId}/icons/{iconId}/convert', 'SourceFileController@addIconConverted');
    Route::get('/fonts/search/{search}', 'FontsController@search');
    Route::post('/bridges/{bridgeId}/fonts', 'FontsController@createFont');
    Route::delete('/bridges/{bridgeId}/fonts/{fontId}', 'FontsController@deleteFont');

    Route::post('/bridges/{bridgeId}/colors', 'ColorsController@createColor');
    Route::post('/bridges/{bridge}/bulk-colors', 'ColorsController@createBulkColors')->name('colors.createBulk');

    Route::patch('/bridges/{bridgeId}/colors/{colorId}', 'ColorsController@updateColor');
    Route::delete('/bridges/{bridgeId}/colors/{colorId}', 'ColorsController@deleteColor');
    Route::delete('/bridges/{bridgeId}/icons/{iconId}', 'SourceFileController@deleteIcon');
    Route::delete('/bridges/{bridgeId}/images/{iconId}', 'SourceFileController@deleteImage');
    Route::post('/bridges/{bridgeId}/icons/{iconId}/converted', 'SourceFileController@addIconConverted');
    Route::post('/bridges/{bridgeId}/icons/{iconId}/filename', 'SourceFileController@updateIconFile');

    Route::patch('/bridges/{bridgeId}/slug', 'BridgeController@updateSlug');
    Route::post('/bridges/{bridgeId}/images/', 'SourceFileController@storeImage');
    Route::post('/bridges/{bridgeId}/images/{imageId}/converted', 'SourceFileController@addImageConverted');
    Route::post('/bridges/{bridgeId}/images/{imageId}/filename', 'SourceFileController@updateImageFile');

    Route::post('/order/{type}/{objectId}/{newOrder}', 'OrderController@changedOrderOnSameSection');
    Route::post('/changeSection/{type}/{objectid}/{newSection}', 'OrderController@changedSection');
});
