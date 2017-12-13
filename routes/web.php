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
    return view('home');
});

// Auth::routes();
// user
// custome route
Route::get('/account', 'Auth\AccountController@index')->name('account');
Route::get('/laporan-perbulan', 'Auth\LaporanUserController@index')->name('user.laporan');

Route::get('/home', 'Auth\HomeController@index')->name('home');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::post('/user/login', 'Auth\LoginController@login')->name('user.login.submit');
Route::get('/user/login', 'Auth\LoginController@showLoginForm')->name('user.login');

Route::post('/user/register', 'Auth\RegisterController@register')->name('user.register.submit');
Route::get('/user/password_request', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');

// admin
Route::get('back/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('back/login', 'Admin\LoginController@login')->name('admin.login.submit');

Route::group(['prefix' => 'back', 'namespace' => 'Admin','middleware' => 'auth:admin'],function(){
  // Route::post('/admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  // Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
  // Route::get('/admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
  Route::post('/logout', 'LoginController@adminLogout')->name('admin.logout');

  Route::get('/', 'AdminController@index')->name('admin.dashboard');

});

// admin menu
Route::group(['prefix' => 'master-data', 'namespace' => 'Admin', 'middleware' => 'auth:admin'],function(){
  // menu
  Route::resource('/data_pemasok', 'data_pemasok\PemasokController');
  Route::resource('/data_pelanggan', 'data_pelanggan\PelangganController');
  Route::resource('/data_barang', 'data_barang\BarangController');
  Route::resource('/data_kategori', 'data_kategori\KategoriController');
  Route::resource('/data_subkategori', 'data_subkategori\SubKategoriController');
  Route::resource('/data_itemkategori', 'data_itemkategori\ItemKategoriController');
  Route::resource('/data_member', 'data_member\MemberController');

  //transaksi
  Route::resource('/transaksi_penjualan', 'transaksi_penjualan\PenjualanController');
  Route::resource('/berita-perusahaan', 'Berita\PerusahaanController');


  // santri
  Route::resource('/santri', 'data_santri\santriController');
  Route::resource('/kurikulum', 'data_kurikulum\kurikulumController');
  Route::resource('/presence', 'data_presence\presenceController');

  // member Saham
  Route::get('/member_saham', 'member_saham\sahamController@addSahamView')->name('add.saham');
  Route::post('/member_saham', 'member_saham\sahamController@storeSaham')->name('store.saham');
});

// user menu


Route::get('/umart', function () {
    return view('home');
})->name('umart');

Route::get('/promo', function () {
    return view('promo_program.promo');
})->name('promo');

Route::get('/program', function () {
    return view('promo_program.program');
})->name('program');

Route::get('/kontes', function () {
    return view('promo_program.kontes');
})->name('kontes');

// keanggotaan
Route::get('/tentang_anggota', function () {
    return view('keanggotaan.tentang_anggota');
})->name('tentang.anggota');

Route::get('/penawaran_spesial', function () {
    return view('keanggotaan.penawaran_spesial');
})->name('penawaran.spesial');

Route::get('/keuntungan_anggota', function () {
    return view('keanggotaan.keuntungan_anggota');
})->name('keuntungan.anggota');

Route::get('/tips', function () {
    return view('keanggotaan.tips');
})->name('tips');

// layanan
Route::get('/pembelian', function () {
    return view('layanan.pembelian');
})->name('pembelian');

Route::get('/pembayaran', function () {
    return view('layanan.pembayaran');
})->name('pembayaran');

Route::get('/isi_saldo', function () {
    return view('layanan.isi_saldo');
})->name('isi.saldo');

Route::get('/ambil_uang', function () {
    return view('layanan.ambil_uang');
})->name('ambil.uang');

Route::get('/tiket', function () {
    return view('layanan.tiket');
})->name('tiket');

Route::get('/jasa_kurir', function () {
    return view('layanan.jasa_kurir');
})->name('jasa.kurir');

Route::get('/pemesanan', function () {
    return view('layanan.pemesanan');
})->name('pemesanan');

Route::get('/waralaba', function () {
    return view('waralaba');
})->name('waralaba');

// berita
Route::get('/perusahaan', function () {
    return view('berita.perusahaan');
})->name('perusahaan');

Route::get('/komunitas_dan_acara', function () {
    return view('berita.komunitas_acara');
})->name('komunitas.dan.acara');

// produk kami
Route::get('/tentang_produk', function () {
    return view('produk_kami.tentang_produk_kami');
})->name('tentang.produk');

Route::get('/kelebihan_produk', function () {
    return view('produk_kami.kelebihan_produk_kami');
})->name('kelebihan.produk');

Route::get('/daftar_produk', function () {
    return view('produk_kami.daftar_produk_kami');
})->name('daftar.produk');

Route::get('/promo_produk', function () {
    return view('produk_kami.promo_produk_kami');
})->name('promo.produk');

// tentang kami
Route::get('/corporate', function () {
    return view('tentang_kami.corporate');
})->name('corporate');

Route::get('/penghargaan_dan_prestasi', function () {
    return view('tentang_kami.penghargaan_prestasi');
})->name('penghargaan.dan.prestasi');

Route::get('/lokasi_kantor', function () {
    return view('tentang_kami.lokasi_kantor');
})->name('lokasi.kantor');

Route::get('/komunitas_kami', function () {
    return view('tentang_kami.komunitas_kami');
})->name('komunitas.kami');

Route::get('/hubungi_kami', function () {
    return view('tentang_kami.hubungi_kami');
})->name('hubungi.kami');

Route::get('/karir', function () {
    return view('karir');
})->name('karir');

Route::get('/umart_mind', function () {
    return view('umart_mind');
})->name('umart.mind');
