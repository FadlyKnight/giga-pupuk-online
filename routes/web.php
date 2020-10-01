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
    return view('frontend.index');
    // return view('layouts.frontend.index2');
});


Route::get('/', 'FrontController@index')->name('front.index');

Route::post('/daftar', 'DaftarController@daftar')->name('daftar.baru');
Route::post('/getlogin', 'DaftarController@getlogin')->name('daftar.login');

Route::get('/all-produk', 'FrontController@allproduk')->name('allproduk');

// Route::group([['middleware' => 'auth'],['middleware' => 'role:Members']], function () {
        
// });



Auth::routes();

Route::group(['middleware' => ['auth','role:Members']], function () {

    Route::get('/cart', 'CartController@tambah')->name('keranjang.tambah');
    // Route::get('/add', 'CartController@add')->name('add.cart');
    Route::get('/tampil', 'CartController@tampil')->name('tampil.cart');
    Route::post('/update', 'CartController@updateJumlah');
    Route::post('/cart/{id}/delete', 'CartController@destroy')->name('delete.cart');
    

    
    Route::post('/ongkir', 'ongkirController@tampil'); //menampilkan halaman ongkir
    Route::get('/ambilHarga', 'ongkirController@hargaJasa'); //mengambil biaya jasa per kilo

    Route::get('/ambilDiskon', 'ongkirController@jumlahDiskon'); //mengambil diskon ongkir
    Route::post('/simpanPemesanan', 'ongkirController@pesan'); //menampilkan halaman ongkir


    Route::get('/alamat', 'alamatController@tampil')->name('akun.alamat');//menampilkan tabel alamat user
    Route::get('/tambahalamat', 'alamatController@tambahTampil');//menampilkan form tambah alamat
    Route::post('/alamat', 'alamatController@tambah'); //memanggil fungsi pada controller untuk menambahkan alamat
    Route::delete('/alamat/{alamat}', 'alamatController@hapus');// menghapus alamat
    Route::get('/alamat/{alamat}/edit', 'alamatController@edit');// memanggil fungsi pada controller untuk menampilkan form edit
    Route::patch('/alamat/{alamat}', 'alamatController@update'); //mengupdate data alamat

    Route::get('/akun/settings', 'AkunController@akun' )->name('akun');
    Route::post('/akun/settings', 'AkunController@akunedit' )->name('akun.edit');

    Route::get('/history/pesan', 'HistoryController@index' )->name('history.pesan');
    Route::post('/history/delete/{id}', 'HistoryController@destroy' )->name('history.sampah');
    
});

Route::group(['middleware' => ['auth','role:Admin']], function () {
    Route::resource('produk', 'ProdukController');
    Route::resource('jasa', 'JasaController');
    Route::post('/updateAjax', 'JasaController@update')->name('jasa.updateAjax');
    
    Route::resource('diskon', 'DiskonController');
    Route::resource('pemesanan', 'PemesananController');
    Route::resource('member', 'MemberController');

    // Route::resource('keranjang', 'KeranjangController');
    
    Route::get('/settings/slider', 'SettingController@slider')->name('slider.index');
    Route::get('/settings/testimoni', 'SettingController@testi')->name('testi.index');
    Route::get('/settings/testimoni/create', 'SettingController@testicreate')->name('create.testi');
    Route::post('/settings/testimoni', 'SettingController@testistore')->name('testi.store');
    Route::get('/settings/testimoni/edit/{id}', 'SettingController@testiedit')->name('testi.edit');
    Route::post('/settings/testimoni/update/{id}', 'SettingController@testiupdate')->name('testi.update');
    Route::delete('/settings/testimoni/delete/{id}', 'SettingController@testidelete')->name('testi.destroy');
    
    Route::get('/settings/slider/create', 'SettingController@slidercreate')->name('create.slider');
    Route::post('/settings/slider', 'SettingController@sliderstore')->name('slider.store');
    Route::get('/settings/slider/edit/{id}', 'SettingController@slideredit')->name('slider.edit');
    Route::post('/settings/slider/update/{id}', 'SettingController@sliderupdate')->name('slider.update');
    Route::delete('/settings/sider/delete/{id}', 'SettingController@sliderdelete')->name('slider.destroy');

});


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();