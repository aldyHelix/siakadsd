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
    return redirect('halaman-utama');
});

Route::get('/home', 'FrontController@homeView');
Route::get('/halaman-utama', 'DashboardController@index')->name('halaman-utama');
Route::post('/siswa/naikkelas', 'SiswaController@naikkelas')->name('siswa.naikkelas');


Route::resource('siswa', 'SiswaController');
Route::get('siswa/{idsiswa}/{idkelas}',['as'=> 'siswa.shownilai','uses'=>'SiswaController@showNilai']);

Route::resource('kelas', 'KelasController');
Route::resource('profilsekolah', 'ProfilSekolahController');
Route::resource('prestasi', 'PrestasiController');
Route::resource('gurukaryawan', 'GuruKaryawanController');
Route::resource('matapel', 'MataPelController');
Route::resource('kompetensidasar', 'KompetensiDasarController');
Route::resource('ekstrakulikuler', 'EkstrakulikulerController');
Route::resource('kenaikankelas', 'KenaikanKelasController');
Route::resource('nilaisiswa', 'NilaiSiswaController');
Route::resource('nilaiki3', 'NilaiKi3Controller');
Route::resource('nilaiki4', 'NilaiKi4Controller');
Route::resource('catatansiswa', 'CatatanSiswaController');
Route::resource('nilaisosial', 'NilaiSosialController');
Route::resource('nilaispiritual', 'NilaiSpiritualController');
Route::resource('kelassiswa', 'KelasSiswaController');
Route::resource('ekskulsiswa', 'EkskulSiswaController');
