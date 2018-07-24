<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'installationChecker'], function () {

    Route::get('/', 'FrontController@home')->name('home');
    Route::get('/identities/{bridge-slug}', 'FrontController@bridge')->name('public-bridge');

    // Activation link routes
    Route::get('/auth/resend-link', 'Auth\\ActivationLinkController@activateLinkPage')->name('activate.page');
    Route::post('/auth/link', 'Auth\\ActivationLinkController@sendLink')->name('activate.post');
    Route::get('/auth/check/{token}', 'Auth\\ActivationLinkController@activate')->name('activate.check');

    Auth::routes();

    Route::group([
        'middleware' => 'auth',
        'namespace'  => 'App',
        'prefix'     => 'app',
    ], function () {
        Route::get('/', 'AppController@index')->name('app');
    });

    Route::get('/{slug}', 'App\AppController@project')->name('app');
    // Route::get('/{slug}', 'App\AppController@publicIdentities')->name('public-identity');
});

Route::group([
    'namespace' => "Installation",
    'prefix'    => 'installation',
], function () {
    Route::get('/introduction', 'InstallationController@introduction')->name('installation');
    Route::get('/database', 'InstallationController@databaseInformation')->name('introduction.database');
    Route::post('/database', 'InstallationController@saveDatabaseInformation')->name('introduction.database.post');
    Route::get('/user', 'InstallationController@userInformation')->name('introduction.user');
    Route::post('/user', 'InstallationController@saveUserInformation')->name('introduction.user.post');
    Route::get('/organization', 'InstallationController@organizationInformation')->name('introduction.organization');
    Route::post('/organization', 'InstallationController@saveOrganizationInformation')->name('introduction.organization.post');
    Route::get('/third-party', 'InstallationController@checkThirdParty')->name('introduction.third-party');
    Route::get('/finish', 'InstallationController@finishInstallation')->name('introduction.finish');
});