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
Route::post('login', 'Auth\LoginController@login');

Route::get('/', function () {
    return redirect('halaman-utama');
});

Route::get('/home', 'FrontController@homeView');
Route::get('/halaman-utama', 'DashboardController@index')->name('halaman-utama');
Route::post('/siswa/naikkelas', 'SiswaController@naikkelas')->name('siswa.naikkelas');


Route::resource('siswa', 'SiswaController');
Route::get('siswa/{idsiswa}/{idkelas}',['as'=> 'siswa.shownilai','uses'=>'SiswaController@showNilai']);
Route::get('raportsiswa',['as' => 'raport.cetak', 'uses'=>'SiswaController@showRaport']);
Route::get('/data-siswa','SiswaController@dataSiswa');
Route::post('',['as' => 'prestasi-siswa.store','uses' => 'PrestasiController@prestasisiswa']);
Route::post('',['as' => 'update.prestasi-siswa','uses' => 'PrestasiController@update_prestasisiswa']);
//REGISTER ROUTES

Route::get('register/user', ['as' => 'register.user' ,'uses' => 'Auth\RegisterController@userAdd']);
Route::get('user', ['as' => 'user.index', 'uses' => 'Auth\RegisterController@index']);
Route::post('',['as' => 'register.store', 'uses' => 'Auth\RegisterController@store']);
Route::get('user/{id}',  ['as' => 'user.edit', 'uses' => 'Auth\RegisterController@edit']);
Route::post('user/{id}',  ['as' => 'user.update', 'uses' => 'Auth\RegisterController@update']);
Route::delete('user/{id}',['as' => 'user.destroy', 'uses' => 'Auth\RegisterController@destroy']);

Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

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
Route::resource('test', 'TestController');
Auth::routes();

Route::get('/home', 'FrontController@homeView')->name('home');
