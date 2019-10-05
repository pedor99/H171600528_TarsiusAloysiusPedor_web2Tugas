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
Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}', 'KategoriArtikelController@show')->name('kategori_artikel.show');

#kategoriberita
Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create','KategoriBeritaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita','KategoriBeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}', 'KategoriBeritaController@show')->name('kategori_berita.show');

#kategorigaleri
Route::get('/kategori_galeri','KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create','KategoriGaleriController@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri','KategoriGaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','KategoriGaleriController@show')->name('kategori_galeri.show');

#kategoripengumuman
Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create','KategoriPengumumanController@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman','KategoriPengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','KategoriPengumumanController@show')->name('kategori_pengumuman.show');

#Artikel
Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create','ArtikelController@create')->name('artikel.create');
Route::post('/artikel','ArtikelController@store')->name('Artikel.store');
Route::get('/artikel/{id}','ArtikelController@show')->name('Artikel.show');

#Berita
Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita/create','BeritaController@create')->name('berita.create');
Route::post('/berita','BeritaController@store')->name('Berita.store');
Route::get('/berita/{id}','BeritaController@show')->name('Berita.show');

#Galeri
Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/galeri/create','GaleriController@create')->name('galeri.create');
Route::post('/galeri','GaleriController@store')->name('Galeri.store');
Route::get('/galeri/{id}','GaleriController@show')->name('Galeri.show');


#Pengumuman
Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index'); 
Route::get('/pengumuman/create','PengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman','PengumumanController@store')->name('Pengumuman.store');
Route::get('/pengumuman/{id}','PengumumanController@show')->name('Pengumuman.show');