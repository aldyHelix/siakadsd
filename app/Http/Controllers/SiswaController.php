<?php 

namespace App\Http\Controllers;
use App\Siswa;
use App\Kelas;
use App\KelasSiswa;
use Illuminate\Http\Request;
use Validator;

class SiswaController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //$kelas = Kelas::pluck('nama_kelas','id_kelas');
    $kelas = Kelas::get();
    $siswa =  Siswa::get();
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
    ]);
    $data = $request->all();
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
    $siswa = Siswa::findOrFail($id);
    return view('siswa.siswa-detail', compact('siswa'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }

  public function naikkelas(Request $request)
  {
    $kelassiswa = new KelasSiswa;
    $siswa = Siswa::find($request->input('id_siswa'));
    $siswa->id_kelas = $request->input('id_kelas');
    $siswa->save();
    $kelassiswa->id_kelas = $request->input('id_kelas');
    $kelassiswa->id_siswa = $request->input('id_siswa');
    $kelassiswa->save();
    return redirect()->route('siswa.index')->with('success', 'Siswa Telah naik kelas');
  }
  
}

?>