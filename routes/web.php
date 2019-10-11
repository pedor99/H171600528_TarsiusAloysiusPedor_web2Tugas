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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

#kategoriartikel
Route::resource('kategori_artikel','KategoriArtikelController');
Route::get('kategori_artikel/trash','KategoriArtikelController@trash')->name('kategori_artikel.trash');

#kategoriberita
Route::resource('kategori_berita','KategoriBeritaController');
Route::get('kategori_berita/trash','KategoriBeritaController@trash')->name('kategori_berita.trash');

#kategorigaleri
Route::resource('kategori_galeri','KategoriGaleriController');
Route::get('kategori_galeri/trash','KategoriGaleriController@trash')->name('kategori_galeri.trash');

#kategoripengumuman
Route::resource('kategori_pengumuman','KategoriPengumumanController');
Route::get('kategori_pengumuman/trash','KategoriPengumumanController@trash')->name('kategori_pengumuman.trash');

#Artikel
Route::resource('artikel','ArtikelController');
Route::get('artikel/trash','ArtikelController@trash')->name('artikel.trash');

#Berita
Route::resource('berita','BeritaController');
Route::get('berita/trash','BeritaController@trash')->name('berita.trash');

#Galeri
Route::resource('galeri','GaleriController');
Route::get('galeri/trash','GaleriController@trash')->name('galeri.trash');

#Pengumuman
Route::resource('pengumuman','PengumumanController');
Route::get('pengumuman/trash','PengumumanController@trash')->name('pengumuman.trash');