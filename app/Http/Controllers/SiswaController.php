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
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Validator;
use File;

class SiswaController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
    //$kelas = Kelas::pluck('nama_kelas','id_kelas');
    $kelas = Kelas::get();
    $siswa =  Siswa::where('nama_lengkap', 'LIKE', '%'.$request->get('q').'%')->paginate(10);
    return view('siswa.siswa-data', compact('siswa', 'kelas'));
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
      $data['foto_siswa'] = $this->savePhoto($request->file('foto_siswa'));
      if ($siswa->foto_siswa !== null)
      {
        $this->deletePhoto($siswa->foto_siswa);
      }
    }  
    $siswa->update($data);

    return redirect()->route('siswa.index')->with('success', 'Berhasil Mengubah Data Siswa ' .$request->get('nama_lengkap'));
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
      
      //cari data kelas siswa
      
      $nilaikelassiswa = KelasSiswa::where(['id_siswa' => $siswaid, 'id_kelas' => $kelasid])->first();
      //cari data nilai siswa
      $cekNilaisiswa = NilaiSiswa::where(['id_siswa' => $siswaid, 'id_kelas_siswa' => $nilaikelassiswa->id_kelas_siswa])->first();
      if (empty($cekNilaisiswa)) {
          $nilaisiswa = new NilaiSiswa;
          $nilaisiswa->id_siswa = $siswaid;
          $nilaisiswa->id_kelas_siswa = $nilaikelassiswa->id_kelas_siswa;

          $nilaisiswa->save();
      }
      return redirect()->route('siswa.index')->with('success', 'Siswa Telah naik kelas');
    } 
  }

  function showNilai($idsiswa, $idkelas)
  {
    $kelassiswa = KelasSiswa::where(['id_siswa' => $idsiswa, 'id_kelas' => $idkelas])->first();

    //cek nilai siswa apakah ada atau tidak
    $nilaisiswa = NilaiSiswa::where(['id_siswa' => $idsiswa, 'id_kelas_siswa' => $kelassiswa->id_kelas_siswa])->first();

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

    $matapel = MataPel::where('kelas', $kelassis)->get();
    $siswa =  Siswa::find($idsiswa);
    return view('siswa.siswa-nilai', compact('kelassiswa','matapel','siswa','nilaisiswa'));
  }
  function showRaport()
  {
    return view('cetak-raport');
  }
  protected function savePhoto(UploadedFile $foto_siswa) 
    { 
        $fileName = str_random(20) . '.' . $foto_siswa->guessClientExtension();
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