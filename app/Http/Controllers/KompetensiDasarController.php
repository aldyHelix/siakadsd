<?php 

namespace App\Http\Controllers;
use App\KompetensiDasar;
use Illuminate\Http\Request;
use App\MataPel;
class KompetensiDasarController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $kd =  KompetensiDasar::paginate(10);
    return view('kd.kd-data', compact('kd'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      $matapel = MataPel::get();
      return view('kd.kd-tambah', compact('matapel'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'id_mapel' => 'required', 
      'kelompok_indikator'  => 'required', 
      'no_indikator' => 'required', 
      'keterangan_kompetensi_dasar' => 'required', 
      'kelas' => 'required',
      'semester' => 'required',  
    ]);
    $data = $request->all();
    KompetensiDasar::create($data);
    return redirect()->route('kompetensidasar.index')->with('success', 'Berhasil Menambahkan Data Kompetensi dasar dan kelas ' .$request->get('kelompok_indikator'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $kd = KompetensiDasar::findOrFail($id);
    return view('kd.kd-details', compact('kd'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $kd = KompetensiDasar::findOrFail($id);
    return view('kd.kd-edit', compact('kd'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    
    $kd = KompetensiDasar::findOrFail($id);
    $this->validate($request, [
      'id_mapel' => 'required', 
      'kelompok_indikator'  => 'required', 
      'no_indikator' => 'required', 
      'keterangan_kompetensi_dasar' => 'required', 
      'kelas' => 'required',
      'semester' => 'required',  
    ]);
    $kd->update($request->all());
    return redirect()->route('kompetensidasar.index')->with('success', 'Berhasil Mengubah Data Kompetensi dasar ' .$request->get('kelompok_indikator'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    KompetensiDasar::find($id)->delete();
    return redirect()->route('kompetensidasar.index')->with('error', 'Berhasil Menghapus Data Kompetensi Dasar ');
  }
  
}

?>