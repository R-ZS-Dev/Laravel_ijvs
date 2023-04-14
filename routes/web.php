<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'welcome_page')->name('welcome_page');
    Route::get('editor', 'editorial_board_page')->name('editorial_board_page');
    Route::get('publicationethic', 'publicationethic_page')->name('publicationethic_page');
    Route::get('authors-guide', 'authors_guide_page')->name('authors_guide_page');
    Route::get('contact-us', 'contact_us_page')->name('contact_us_page');
    Route::get('usp', 'usp_page')->name('usp_page');
    Route::get('online-submission', 'online_submission_page')->name('online_submission_page');
    Route::get('in-press', 'in_press_page')->name('in_press_page');
    Route::get('top-cited-articles', 'top_cited_articles_page')->name('top_cited_articles_page');
    Route::get('archive', 'archive_page')->name('archive_page');
    Route::get('archivevolumeview', 'archivevolumeview_page')->name('archivevolumeview_page');
    Route::get('archiveabstract', 'archiveabstract_page')->name('archiveabstract_page');
    Route::get('archivefulltext', 'archivefulltext_page')->name('archivefulltext_page');
    Route::get('archivefigure', 'archivefigure_page')->name('archivefigure_page');
    Route::get('userregistration', 'userregistration_page')->name('userregistration_page');
    Route::get('article-sub-form', 'article_sub_form_page')->name('article_sub_form_page');
    Route::get('submitmsg', 'submitmsg_page')->name('submitmsg_page');
});

// Route::get('/', function () {
//     return view('pages.welcome');
// });
