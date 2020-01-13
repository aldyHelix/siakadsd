<?php
use App\Siswa;
use Illuminate\Support\Facades\Input;
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
    return redirect('home');
});
Route::get('/home', 'FrontController@homeView')->name('home');
Route::get('/detailsiswa/{q}', 'FrontController@siswaDetails')->name('detailsiswa');
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//searching in frontpage by here
Route::any('/search',function(){
    $q = Input::get('q');
    return redirect()->route('detailsiswa', ['q' => $q]);
});
//Route::get('/home', 'FrontController@homeView');
Route::get('/detailsiswa', 'FrontController@siswaDetails')->name('detailsiswa');
Route::get('/halaman-utama', 'DashboardController@index')->name('halaman-utama');


Route::group(['prefix' => 'siswa'], function(){
    Route::post('/naikkelas', 'SiswaController@naikkelas')->name('siswa.naikkelas');
    Route::get('/{idsiswa}/{idkelas}',['as'=> 'siswa.shownilai','uses'=>'SiswaController@showNilai']);
    
});

Route::get('raportsiswa',['as' => 'raport.cetak', 'uses'=>'SiswaController@showRaport']);
Route::get('/data-siswa','SiswaController@dataSiswa');

Route::post('',['as' => 'prestasi-siswa.store','uses' => 'PrestasiController@prestasisiswa']);
Route::post('',['as' => 'update.prestasi-siswa','uses' => 'PrestasiController@update_prestasisiswa']);
Route::post('',['as' => 'nilai.saveNilaispiritual', 'uses' => 'SiswaController@saveNilaiSpiritual']);
Route::post('',['as' => 'nilai.saveNilaisosial', 'uses' => 'SiswaController@saveNilaiSosial']);
Route::post('',['as' => 'nilai.tglupdate', 'uses' => 'NilaiSiswaController@tglupdate']);
//REGISTER ROUTES

Route::get('register/user', ['as' => 'register.user' ,'uses' => 'Auth\RegisterController@userAdd']);
Route::get('user', ['as' => 'user.index', 'uses' => 'Auth\RegisterController@index']);
Route::post('',['as' => 'register.store', 'uses' => 'Auth\RegisterController@store']);
Route::get('user/{id}',  ['as' => 'user.edit', 'uses' => 'Auth\RegisterController@edit']);
Route::post('user/{id}',  ['as' => 'user.update', 'uses' => 'Auth\RegisterController@update']);
Route::delete('user/{id}',['as' => 'user.destroy', 'uses' => 'Auth\RegisterController@destroy']);

//laporanroutes
Route::get('laporan/tahunan/', ['as' => 'laporan.tahunan' ,'uses' => 'LaporanController@showTahunan']);
Route::get('laporan/semester/', ['as' => 'laporan.semester' ,'uses' => 'LaporanController@showSemester']);
Route::get('laporan/kelas/', ['as' => 'laporan.kelas' ,'uses' => 'LaporanController@showKelas']);
Route::get('laporan/siswa/', ['as' => 'laporan.siswa' ,'uses' => 'LaporanController@showSiswa']);
Route::get('laporan/guru/', ['as' => 'laporan.guru' ,'uses' => 'LaporanController@showGuru']);
Route::get('laporan/prestasi/', ['as' => 'laporan.prestasi' ,'uses' => 'LaporanController@showPrestasi']);

Route::group(['prefix' => 'kelas'], function(){
    Route::get('{id}/rekap', 'KelasController@rekapNilai')->name('rekap.nilai.kelas');
});
Route::group(['prefix' => 'gurukaryawan'], function(){

});
Route::group(['prefix' => 'matapel'], function(){

});
Route::group(['prefix' => 'kompetensidasar'], function(){

});
Route::group(['prefix' => 'nilaisiswa'], function(){

});
Route::group(['prefix' => 'nilaiki3'], function(){
    Route::put('{id}/updateki3', 'NilaiKi3Controller@update');
});
Route::group(['prefix' => 'nilaiki4'], function(){
    Route::put('{id}/updateki4', 'NilaiKi4Controller@update');
});
Route::group(['prefix' => 'nilaispiritual'], function(){

});
Route::group(['prefix' => 'nilaisosial'], function(){

});
Route::group(['prefix' => 'catatansiswa'], function(){

});
Route::group(['prefix' => 'kelassiswa'], function(){

});
Route::group(['prefix' => 'prestasi'], function(){

});
Route::group(['prefix' => 'ekstrakulikuler'], function(){

});

Route::resource('siswa', 'SiswaController');
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

