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
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

// ADMIN
Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin/dashboard','AdminController');

//EBOOK
    Route::resource('admin/ebook', 'EbookController');
    Route::get('admin/ebook', 'EbookController@index')->name('ebook');
    Route::get('ebook/{id}/delete','EbookController@destroy');

//ETUBE
    Route::resource('admin/etube', 'EtubeController');
    Route::get('admin/etube', 'EtubeController@index')->name('etube');
    Route::get('etube/{id}/delete','EtubeController@destroy');

//ARTIKEL
    Route::resource('admin/artikel', 'ArtikelController');
    Route::get('admin/artikel','ArtikelController@index')->name('artikel');
    Route::get('artikel/{id}/delete','ArtikelController@destroy');

//KATEGORI
    Route::get('admin/kategori','KategoriController@index')->name('kategori');
    Route::post('admin/kategori/create','KategoriController@create');
    Route::post('admin/kategori/{id}/edit','KategoriController@edit');
    Route::get('admin/kategori/{id}/delete','KategoriController@delete');

//Email
    Route::resource('admin/email', 'EmailController');
    Route::get('admin/email','EmailController@index')->name('email');
    Route::get('email/{id}/delete','EmailController@destroy')->name('email_destroy');

//AKUN    
    Route::get('admin/akun','AkunController@index')->name('akun');
    Route::get('admin/akun/{id}/edit','AkunController@edit')->name('akun_edit');
    Route::post('admin/akun/{id}/update','AkunController@update')->name('akun_update');
});


//AJAX PAGINATION
// Route::get('admin/ebook', 'EbookController@fetch_data');


    
//PERPUS WEBSITE
Route::get('/', function () {
    return view('perpustakaan.home.content');
});
Route::get('perpustakaan/', function () {
    return view('perpustakaan.home.content');
})->name('perpustakaan');

// ABOUT
Route::get('perpustakaan/about', function () {
    return view('perpustakaan.about.content');
})->name('perpustakaan_about');

// E-BOOK
Route::get('perpustakaan/e-book', 'EbookviewController@index')->name('perpustakaan_e-book');

// E-BOOK DETAIL
Route::get('/perpustakaan/e-book/{id}/detail', 'EbookviewController@detail')->name('perpustakaan_e-book_detail');

// E-TUBE
Route::get('perpustakaan/video', 'EtubeviewController@index')->name('perpustakaan_video');
Route::get('perpustakaan/video/{id}', 'EtubeviewController@detail');

// BLOG
Route::get('perpustakaan/blog', 'ArtikelviewController@index')->name('perpustakaan_blog');
// BLOG DETAIL
Route::get('perpustakaan/blog/{id}/detail','ArtikelviewController@show')->name('perpustakaan_blog_detail');

// CONTACT
Route::resource('perpustakaan_contact','EmailController');
Route::get('perpustakaan/contact', function () {
    return view('perpustakaan.contact.content');
})->name('perpustakaan_contact');

// ELEMENT
Route::get('perpustakaan/element', function () {
    return view('perpustakaan.element.content');
})->name('perpustakaan_element');
