<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\GuruKaryawan;
use App\KelasSiswa;
use App\Siswa;
class KelasController extends Controller 
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
  
  public function index()
  {
    $kelas =  Kelas::paginate(6);
    return view('kelas.kelas-data', compact('kelas'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $guru = GuruKaryawan::pluck('nama','id_guru');
    return view('kelas.kelas-tambah', compact('guru'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'nama_kelas' => 'required|string|max:255', 
      'semester'  => 'required|string|max:255', 
      'tahun_ajaran' => 'required|string|max:255', 
      'id_guru' => 'required', 
    ]);
    $data = $request->all();
    Kelas::create($data);
    return redirect()->route('kelas.index')->with('success', 'Berhasil Menambahkan Data Kelas ' .$request->get('nama_kelas'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $kelassiswa = Siswa::where('id_kelas',$id)->paginate(10);
    $guru = GuruKaryawan::pluck('nama','id_guru');
    $kelas = Kelas::findOrFail($id);
    return view('kelas.kelas-details', compact('kelas','guru','kelassiswa'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $guru = GuruKaryawan::pluck('nama','id_guru');
    $kelas = Kelas::findOrFail($id);
    return view('kelas.kelas-edit', compact('kelas','guru'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    $kelas = Kelas::findOrFail($id);
    $this->validate($request, [
      'nama_kelas' => 'required|string|max:255', 
      'semester'  => 'required|string|max:255', 
      'tahun_ajaran' => 'required|string|max:255', 
      'id_guru' => 'required',
    ]);
    $kelas->update($request->all());
    return redirect()->route('kelas.index')->with('success', 'Berhasil Mengubah Data Kelas ' .$request->get('nama_kelas'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Kelas::find($id)->delete();
    return redirect()->route('kelas.index')->with('error', 'Berhasil Menghapus Data kelas ');
  }
  public function rekapNilai($id)
  {
      $dt = KelasSiswa::where('id_kelas', $id)->get();
      return view('kelas.kelas-rekap-nilai', compact('dt'));
  }
  
}

?>