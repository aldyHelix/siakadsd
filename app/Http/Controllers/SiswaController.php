<?php 

namespace App\Http\Controllers;
use App\Siswa;
use App\Kelas;
use App\KelasSiswa;
use App\Prestasi;
use App\KenaikanKelas;
use App\Ekstrakulikuler;
use App\MataPel;
use App\NilaiSiswa;
use App\NilaiSosial;
use App\NilaiSpiritual;
use App\NilaiKi3;
use App\NilaiKi4;
use App\CatatanSiswa;
use App\User;
use App\GuruKaryawan;
use App\KompetensiDasar;
use App\ProfilSekolah;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Validator;
use File;

class SiswaController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function __construct()
    {
        $this->middleware('auth');
    }

  public function index(Request $request)
  {
    //$kelas = Kelas::pluck('nama_kelas','id_kelas');
    $kelas = Kelas::get();

    // if(Auth::user()){
    $userRole = Auth::user()->role;
    // } else {
    //   return redirect()->route('login');
    // }

    //$siswa =  Siswa::where('nama_lengkap', 'LIKE', '%'.$request->get('q').'%')->paginate(10);
    if($userRole == 'gurukelas')
    {
      $guru =  GuruKaryawan::findOrFail(Auth::user()->guru->id_guru);
      $kelasguru = Kelas::where('id_guru', $guru->id_guru)->pluck('id_kelas');
      //$siswa =  Siswa::whereIn('id_kelas', $kelas->id_kelas)->paginate(10);
      $siswa =  Siswa::whereIn('id_kelas', $kelasguru)->paginate(10);
    }
    else {
      $siswa = Siswa::paginate(10);
    }
    
    if($request->get('q')){
      $siswa =  Siswa::whereIn('id_kelas', $kelasguru)->where('nama_lengkap', 'LIKE', '%'.$request->get('q').'%')->paginate(10);
    }
    
    return view('siswa.siswa-data', compact('siswa', 'kelas', 'userRole'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('siswa.siswa-tambah');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'nama_lengkap' => 'required|string|max:255', 
      'jenis_kelamin'  => 'required', 
      'INDUK' => 'required|numeric',
      'NISN' => 'sometimes|numeric', 
      'NIK' => 'sometimes|numeric', 
      'tempat_lahir' => 'required|string|max:255', 
      'tgl_lahir' => 'required|date', 
      'no_reg_akta_lahir' => 'required|numeric', 
      'agama'  => 'required|string|max:255', 
      'kepercayaan' => 'required|string|max:255', 
      'kewarganegaraan' => 'string|max:255', 
      'berkebutuhan_khusus' => 'required|string|max:255', 
      'alamat_jalan' => 'required|string', 
      'rt' => 'required|numeric', 
      'rw' => 'required|numeric', 
      'nama_dusun' => 'required|string|max:255', 
      'nama_kelurahan_desa' => 'required|string|max:255', 
      'kecamatan' => 'required|string|max:255', 
      'kota_kab' => 'required|string|max:255',
      'kode_pos' => 'required|numeric', 
      'status_tempat_tinggal' => 'required|string|max:255', 
      'moda_transportasi' => 'required|string|max:255', 
      'anak_ke' => 'sometimes|numeric', 
      'nama_ayah' => 'required|string|max:255', 
      'nik_ayah' => 'required|numeric', 
      'tempat_lahir_ayah' => 'required|string|max:255', 
      'tgl_lahir_ayah' => 'required|date', 
      'pendidikan_ayah' => 'required|string|max:255', 
      'pekerjaan_ayah' => 'required|string|max:255', 
      'berkebutuhan_khusus_ayah' => 'required|string|max:255', 
      'nama_ibu' => 'required|string|max:255', 
      'nik_ibu' => 'required|numeric',
      'tempat_lahir_ibu' => 'required|string|max:255', 
      'tgl_lahir_ibu' => 'required|date', 
      'pendidikan_ibu' => 'required|string|max:255',
      'penghasilan_ibu' => 'required|string|max:255', 
      'berkebutuhan_khusus_ibu' => 'required|string|max:255',
      'foto_siswa' => 'mimes:jpeg,png,jpg|max:10240'
    ]);
    
    $data = $request->only('nama_lengkap', 'jenis_kelamin', 'INDUK','NISN', 'NIK', 'KITAS', 'tempat_lahir', 'tgl_lahir', 'no_reg_akta_lahir', 'agama', 'kepercayaan', 'kewarganegaraan', 'berkebutuhan_khusus', 'alamat_jalan', 'rt', 'rw', 'nama_dusun', 'nama_kelurahan_desa', 'kecamatan', 'kota_kab','kode_pos', 'lat', 'long', 'status_tempat_tinggal', 'moda_transportasi', 'no_kartu_keluarga_sejahtera', 'anak_ke', 'is_kps_pkh', 'no_kps_pkh', 'is_kip', 'no_kip', 'nama_kip', 'alasan_layak_kip', 'nama_ayah', 'nik_ayah', 'tempat_lahir_ayah', 'tgl_lahir_ayah', 'pendidikan_ayah', 'pekerjaan_ayah','penghasilan_ayah', 'berkebutuhan_khusus_ayah', 'nama_ibu', 'nik_ibu','tempat_lahir_ibu', 'tgl_lahir_ibu', 'pendidikan_ibu','penghasilan_ibu','pekerjaan_ibu', 'berkebutuhan_khusus_ibu', 'nama_wali', 'nik_wali', 'tempat_lahir_wali', 'tgl_lahir_wali', 'pendidikan_wali', 'pekerjaan_wali','penghasilan_wali', 'kontak_no_tlep_1', 'kontak_no_tlep_2', 'no_hp_1', 'no_hp_2', 'email_1', 'email_2');
    $kelassiswabaru = Kelas::where('nama_kelas', 'LIKE' ,'%'.'baru'.'%')->orWhere('tahun_ajaran', date("Y"))->first();
    if (empty($kelassiswabaru)) {
      $kelassiswabaru->id_kelas = 0;
    }
    $data['id_kelas'] = $kelassiswabaru->id_kelas;
    if ($request->hasFile('foto_siswa')) {
      $data['foto_siswa'] = $this->savePhoto($request->file('foto_siswa'));
    }
    
    Siswa::create($data);

    return redirect()->route('siswa.index')->with('success', 'Berhasil Menambahkan Data Siswa ' .$request->get('nama_lengkap'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //$guru = GuruKaryawan::pluck('nama','id_guru');
    $ekskul = Ekstrakulikuler::pluck('nama_ekskul','id_ekskul');
    $siswa = Siswa::findOrFail($id);
    return view('siswa.siswa-detail', compact('siswa','ekskul'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $siswa = Siswa::findOrFail($id);
    return view('siswa.siswa-edit', compact('siswa'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    $siswa = Siswa::findOrFail($id);
    $data = $request->only('nama_lengkap', 'jenis_kelamin', 'INDUK','NISN', 'NIK', 'KITAS', 'tempat_lahir', 'tgl_lahir', 'no_reg_akta_lahir', 'agama', 'kepercayaan', 'kewarganegaraan', 'berkebutuhan_khusus', 'alamat_jalan', 'rt', 'rw', 'nama_dusun', 'nama_kelurahan_desa', 'kecamatan', 'kota_kab','kode_pos', 'lat', 'long', 'status_tempat_tinggal', 'moda_transportasi', 'no_kartu_keluarga_sejahtera', 'anak_ke', 'is_kps_pkh', 'no_kps_pkh', 'is_kip', 'no_kip', 'nama_kip', 'alasan_layak_kip', 'nama_ayah', 'nik_ayah', 'tempat_lahir_ayah', 'tgl_lahir_ayah', 'pendidikan_ayah', 'pekerjaan_ayah','penghasilan_ayah', 'berkebutuhan_khusus_ayah', 'nama_ibu', 'nik_ibu','tempat_lahir_ibu', 'tgl_lahir_ibu', 'pendidikan_ibu','penghasilan_ibu','pekerjaan_ibu', 'berkebutuhan_khusus_ibu', 'nama_wali', 'nik_wali', 'tempat_lahir_wali', 'tgl_lahir_wali', 'pendidikan_wali', 'pekerjaan_wali','penghasilan_wali', 'kontak_no_tlep_1', 'kontak_no_tlep_2', 'no_hp_1', 'no_hp_2', 'email_1', 'email_2');
    if ($request->hasFile('foto_siswa')) {
      if ($siswa->foto_siswa !== null)
      {
        $berhasil = 'Berhasil Mengubah Foto dan Memperbarui Data ';
        $this->deletePhoto($siswa->foto_siswa);
        $data['foto_siswa'] = $this->savePhoto($request->file('foto_siswa'));
      } else {
        $berhasil = 'Berhasil Menambahkan Foto dan Memperbarui Data ';
        $data['foto_siswa'] = $this->savePhoto($request->file('foto_siswa'));
      }
    } else {
      $berhasil = 'Berhasil Memperbarui Data ';
    }  
    
    if($siswa->update($data)){
      return redirect()->route('siswa.index')->with('success', $berhasil .$request->get('nama_lengkap'));
    }
    return redirect()->route('siswa.index')->with('Error', 'Gagal Mengubah Data Siswa, Terjadi Kesalahan Sistem! ' .$request->get('nama_lengkap'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Siswa::find($id)->delete();
    return redirect()->route('siswa.index')->with('error', 'Berhasil Menghapus Data Siswa ');
  }

  public function naikkelas(Request $request)
  {
    //update id kelas siswa saat ini
    $siswaid = $request->input('id_siswa');
    $kelasid = $request->input('id_kelas');
    //add kelas siswa
    if (!empty(KelasSiswa::where([['id_siswa','=',$siswaid],['id_kelas', '=',$kelasid]])->first())) {
      return redirect()->route('siswa.index')->with('error', 'Siswa Tidak Dapat di pindahkan ke kelas yang sama, Harap pilih kelas yang lain.');
    } else {
      $siswa = Siswa::find($siswaid);

      //masuk data kenaikan kelas
      $naikKelas = new KenaikanKelas;
      $naikKelas->id_siswa = $siswaid;
      $naikKelas->id_kelas_sebelum = $siswa->id_kelas;
      $naikKelas->id_kelas_sesudah = $kelasid;

      $cekKelasa = Kelas::findOrFail($siswa->id_kelas);
      $cekKelasb = Kelas::findOrFail($kelasid);

      $siswa->id_kelas = $kelasid;
      
      $kelassiswa = new KelasSiswa;
      $kelassiswa->id_kelas = $request->input('id_kelas');
      $kelassiswa->id_siswa = $request->input('id_siswa');

      $kelassiswa->save();
      
      $siswa->save();
      if ($cekKelasa->nama_kelas == $cekKelasb->nama_kelas) {
        $naikKelas->is_siswa_naik = false;
      }
       
      $naikKelas->save();

      //buat nilai siswa
      $idNilaikelassiswa = $kelassiswa->id_kelas_siswa;
      //cari data kelas siswas
      $nilaikelassiswa = KelasSiswa::where(['id_siswa' => $siswaid, 'id_kelas' => $kelasid])->first();
      //cari data nilai siswa
      $cekNilaisiswa = NilaiSiswa::where(['id_siswa' => $siswaid, 'id_kelas_siswa' => $idNilaikelassiswa])->first();
      //get Kelas
      $kelas = Kelas::where('id_kelas', $kelasid)->first();
      if($kelas->nama_kelas == 'Kelas 1')
      {
        $kelasnya = 1;
      }
      elseif($kelas->nama_kelas == 'Kelas 2')
      {
        $kelasnya = 2;
      }
      elseif($kelas->nama_kelas == 'Kelas 3')
      {
        $kelasnya = 3;
      }
      elseif($kelas->nama_kelas == 'Kelas 4')
      {
        $kelasnya = 4;
      }
      elseif($kelas->nama_kelas == 'Kelas 5')
      {
        $kelasnya = 5;
      }
      elseif($kelas->nama_kelas == 'Kelas 6')
      {
        $kelasnya = 6;
      } else {
        $kelasnya = 0;
      }
      //getData Matapelajaran
      $matapel = MataPel::where(['kelas'=> $kelasnya])->get();

      //buatnilaisiswa
      if (empty($cekNilaisiswa)) {
          $nilaisiswa = new NilaiSiswa;
          $nilaisiswa->id_siswa = $siswaid;
          $nilaisiswa->id_kelas_siswa = $nilaikelassiswa->id_kelas_siswa;

          $nilaisiswa->save();

        //buat nilai mata pelajaran juga disini
        $recekNilaisiswa = NilaiSiswa::where(['id_siswa' => $siswaid, 'id_kelas_siswa' => $nilaikelassiswa->id_kelas_siswa])->first();

        foreach($matapel as $mp){
          $kdki3 = KompetensiDasar::where(['id_mapel'=>$mp->id_mata_pelajaran, 'kelas'=>$mp->kelas, 'semester'=>$kelas->semester, 'kelompok_indikator'=>'ki3'])->get();
          $kdki4 = KompetensiDasar::where(['id_mapel'=>$mp->id_mata_pelajaran, 'kelas'=>$mp->kelas, 'semester'=>$kelas->semester, 'kelompok_indikator'=>'ki4'])->get();
          //insertdata KI3
          foreach($kdki3 as $kd){
              $nilaiki3 = new NilaiKi3;
              $nilaiki3->id_nilai_siswa = $recekNilaisiswa->id_nilai_siswa;
              $nilaiki3->id_kompetensi_dasar = $kd->id_kompetensi_dasar;
              //1
              $nilaiki3->p1lisan = $mp->kkm;
              $nilaiki3->p1tulis = $mp->kkm;
              $nilaiki3->p1tugas1 = $mp->kkm;
              $nilaiki3->p1tugas2 = $mp->kkm;
              $nilaiki3->p1rata_rata = ($mp->kkm * 4)/4;
              //2
              $nilaiki3->p2lisan = $mp->kkm;
              $nilaiki3->p2tulis = $mp->kkm;
              $nilaiki3->p2tugas1 = $mp->kkm;
              $nilaiki3->p2tugas2 = $mp->kkm;
              $nilaiki3->p2rata_rata = ($mp->kkm * 4)/4;
              //3
              $nilaiki3->p3lisan = $mp->kkm;
              $nilaiki3->p3tulis = $mp->kkm;
              $nilaiki3->p3tugas1 = $mp->kkm;
              $nilaiki3->p3tugas2 = $mp->kkm;
              $nilaiki3->p3rata_rata = ($mp->kkm * 4)/4;
              //4
              $nilaiki3->p4lisan = $mp->kkm;
              $nilaiki3->p4tulis = $mp->kkm;
              $nilaiki3->p4tugas1 = $mp->kkm;
              $nilaiki3->p4tugas2 = $mp->kkm;
              $nilaiki3->p4rata_rata = ($mp->kkm * 4)/4;
              //5
              $nilaiki3->p5lisan = $mp->kkm;
              $nilaiki3->p5tulis = $mp->kkm;
              $nilaiki3->p5tugas1 = $mp->kkm;
              $nilaiki3->p5tugas2 = $mp->kkm;
              $nilaiki3->p5rata_rata = ($mp->kkm * 4)/4;

              $nilaiki3->NPH = ($mp->kkm * 20)/20;
              $nilaiki3->NPAS1 = $mp->kkm;
              $nilaiki3->NPAS2 = $mp->kkm;

              $nilaiki3->nilai_kd = ($mp->kkm * 2)/2;

              $nilaiki3->save();
          }

          //insertdata KI4
          foreach($kdki4 as $kd){
              $nilaiki4 = new NilaiKi4;
              $nilaiki4->id_nilai_siswa = $recekNilaisiswa->id_nilai_siswa;
              $nilaiki4->id_kompetensi_dasar = $kd->id_kompetensi_dasar;

              //praktik
              $nilaiki4->praktik_p1 = $mp->kkm;
              $nilaiki4->praktik_p2 = $mp->kkm;
              $nilaiki4->praktik_p3 = $mp->kkm;
              $nilaiki4->praktik_p4 = $mp->kkm;
              $nilaiki4->praktik_p5 = $mp->kkm;
              $nilaiki4->praktik_max = $mp->kkm;
              //produk
              $nilaiki4->produk_p1 = $mp->kkm;
              $nilaiki4->produk_p2 = $mp->kkm;
              $nilaiki4->produk_p3 = $mp->kkm;
              $nilaiki4->produk_p4 = $mp->kkm;
              $nilaiki4->produk_p5 = $mp->kkm;
              $nilaiki4->produk_max = $mp->kkm;
              //proyek
              $nilaiki4->proyek_p1 = $mp->kkm;
              $nilaiki4->proyek_p2 = $mp->kkm;
              $nilaiki4->proyek_p3 = $mp->kkm;
              $nilaiki4->proyek_p4 = $mp->kkm;
              $nilaiki4->proyek_p5 = $mp->kkm;
              $nilaiki4->proyek_max = $mp->kkm;

              $nilaiki4->save();
          }

        }

      }
      //buat juga nilai sosial dan spiritual secara default
      //hasil bisa hanya di tampilkan tanpa harus membuat lagi
      $recekNilaisiswa = NilaiSiswa::where(['id_siswa' => $siswaid, 'id_kelas_siswa' => $nilaikelassiswa->id_kelas_siswa])->first();
      //dicek ulang for get data
      $cekNilaiSosial = NilaiSosial::where('id_nilai_siswa', $recekNilaisiswa->id_nilai_siswa)->first();
      $cekNilaiSpiritual = NilaiSpiritual::where('id_nilai_siswa', $recekNilaisiswa->id_nilai_siswa)->first();

      if(empty($cekNilaiSosial)){
        $nilaisosialpkn = new NilaiSosial;
        $nilaisosialagama = new NilaiSosial;

        $nilaisosialpkn->id_nilai_siswa = $recekNilaisiswa->id_nilai_siswa;
        $nilaisosialpkn->nama_nilai_sosial = "Pendidikan Pancasila dan Kewarganegaraan";

        $nilaisosialagama->id_nilai_siswa = $recekNilaisiswa->id_nilai_siswa;
        $nilaisosialagama->nama_nilai_sosial = "Pendidikan Agama dan Budi Pekerti";

        $nilaisosialpkn->save();
        $nilaisosialagama->save();
      }
      //buat juga nilai sosial dan spiritual secara default
      //hasil bisa hanya di tampilkan tanpa harus membuat lagi
      if(empty($cekNilaiSpiritual)){
        $nilaispiritualpkn = new NilaiSpiritual;
        $nilaispiritualagama = new NilaiSpiritual;

        $nilaispiritualpkn->id_nilai_siswa = $recekNilaisiswa->id_nilai_siswa;
        $nilaispiritualpkn->nama_nilai_spiritual = "Pendidikan Pancasila dan Kewarganegaraan";

        $nilaispiritualagama->id_nilai_siswa = $recekNilaisiswa->id_nilai_siswa;
        $nilaispiritualagama->nama_nilai_spiritual = "Pendidikan Agama dan Budi Pekerti";

        $nilaispiritualpkn->save();
        $nilaispiritualagama->save();
      }
      //buat juga nilai sosial dan spiritual secara default
      //hasil bisa hanya di tampilkan tanpa harus membuat lagi
      return redirect()->route('siswa.index')->with('success', 'Siswa Telah naik kelas');
    } 
  }

  function showNilai($idsiswa, $idkelas)
  {
    $kelassiswa = KelasSiswa::where(['id_siswa' => $idsiswa, 'id_kelas' => $idkelas])->first();
    $profilSekolah = ProfilSekolah::first();
    //cek nilai siswa apakah ada atau tidak
    $nilaisiswa = NilaiSiswa::where(['id_siswa' => $idsiswa, 'id_kelas_siswa' => $kelassiswa->id_kelas_siswa])->first();
    $nilaisosial = NilaiSosial::where('id_nilai_siswa', $nilaisiswa->id_nilai_siswa)->get();
    $nilaispiritual = NilaiSpiritual::where('id_nilai_siswa', $nilaisiswa->id_nilai_siswa)->get();

    $kelas = Kelas::find($idkelas);
    if ($kelas->nama_kelas == 'Kelas 1') {
      $kelassis = 1;
    } 
    elseif ($kelas->nama_kelas == 'Kelas 2') {
      $kelassis = 2;
    }
    elseif ($kelas->nama_kelas == 'Kelas 3') {
      $kelassis = 3;
    }
    elseif ($kelas->nama_kelas == 'Kelas 4') {
      $kelassis = 4;
    }
    elseif ($kelas->nama_kelas == 'Kelas 5') {
      $kelassis = 5;
    }
    elseif ($kelas->nama_kelas == 'Kelas 6') {
      $kelassis = 6;
    }
    else {
      $kelassis = 0;
    }

    $nilaiki3 = NilaiKi3::where('id_nilai_siswa', $nilaisiswa->id_nilai_siswa)->get();
    $nilaiki4 = NilaiKi4::where('id_nilai_siswa', $nilaisiswa->id_nilai_siswa)->get();
    $catatansiswa = CatatanSiswa::where('id_nilai_siswa', $nilaisiswa->id_nilai_siswa)->first();
    $matapel = MataPel::where('kelas', $kelassis)->get();
    $siswa =  Siswa::find($idsiswa);
    return view('siswa.siswa-nilai', compact('kelassiswa','matapel','siswa','nilaisiswa', 'nilaispiritual', 'nilaisosial' ,'profilSekolah','nilaiki3','nilaiki4','catatansiswa'));
  }
  function saveNilaiSpiritual(Request $request)
  {

  }
  function showRaport()
  {
    return view('cetak-raport');
  }
  protected function savePhoto(UploadedFile $foto_siswa) 
    { 
        $fileName = str_random(10) . '.' . $foto_siswa->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $foto_siswa->move($destinationPath, $fileName);
        return $fileName;
    }
    public function deletePhoto($filename) 
    { 
      $path = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $filename; 
      return File::delete($path); 
    }
}

?>