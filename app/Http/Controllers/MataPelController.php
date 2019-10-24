<?php 

namespace App\Http\Controllers;
use App\MataPel;
use Illuminate\Http\Request;
use App\GuruKaryawan;
class MataPelController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $mapel =  MataPel::get();
    return view('mapel.mapel-data', compact('mapel'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $guru = GuruKaryawan::pluck('nama','id_guru');
    return view('mapel.mapel-tambah', compact('guru'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'id_guru' => 'required', 
      'kelas'  => 'required', 
      'nama_mata_pelajaran' => 'required', 
      'kkm' => 'required',
      'is_kelas' => 'required', 
    ]);
    $data = $request->all();
    MataPel::create($data);
    return redirect()->route('matapel.index')->with('success', 'Berhasil Menambahkan Data Mata Pelajaran' .$request->get('nama_mata_pelajaran'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $matapel = MataPel::findOrFail($id);
    return view('mapel.mapel-detail', compact('matapel'));
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
    $matapel = MataPel::findOrFail($id);
    return view('mapel.mapel-edit', compact('matapel','guru'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    
    $matapel = MataPel::findOrFail($id);
    $this->validate($request, [
      'id_guru' => 'required', 
      'kelas'  => 'required', 
      'nama_mata_pelajaran' => 'required', 
      'kkm' => 'required',
      'is_kelas' => 'required', 
    ]);
    $matapel->update($request->all());
    return redirect()->route('matapel.index')->with('success', 'Berhasil Mengubah Data Mata Pelajaran ' .$request->get('nama_mata_pelajaran'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    MataPel::find($id)->delete();
    return redirect()->route('matapel.index')->with('error', 'Berhasil Menghapus Data Mata pelajaran');
  }
  
}

?>