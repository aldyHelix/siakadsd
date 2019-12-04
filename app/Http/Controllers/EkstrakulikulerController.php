<?php 

namespace App\Http\Controllers;
use App\Ekstrakulikuler;
use App\EkskulSiswa;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller 
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
    $ekskul =  Ekstrakulikuler::paginate(5);
    return view('ekskul.ekskul-data', compact('ekskul'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('ekskul.ekskul-tambah');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'nama_ekskul' => 'required|string|max:255', 
      'nama_pengajar'  => 'required|string|max:255', 
      'hari_mengajar' => 'required|string|max:255', 
      'jam_mengajar' => 'required', 
    ]);
    $data = $request->all();
    Ekstrakulikuler::create($data);
    return redirect()->route('ekstrakulikuler.index')->with('success', 'Berhasil Menambahkan Data Ekstrakulikuler' .$request->get('nama_ekskul'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $ekskul = Ekstrakulikuler::findOrFail($id);
    $siswa = $ekskul->siswa()->paginate(5);
    return view('ekskul.ekskul-details', compact('ekskul','siswa','paginate'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $ekskul = Ekstrakulikuler::findOrFail($id);
    return view('ekskul.ekskul-edit', compact('ekskul'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    $ekstrakulikuler = Ekstrakulikuler::findOrFail($id);
    $this->validate($request, [
      'nama_ekskul' => 'required|string|max:255', 
      'nama_pengajar'  => 'required|string|max:255', 
      'hari_mengajar' => 'required|string|max:255', 
      'jam_mengajar' => 'required', 
    ]);
    $ekstrakulikuler->update($request->all());
    return redirect()->route('ekstrakulikuler.index')->with('success', 'Berhasil Mengubah Data ekstrakulikuler ' .$request->get('nama_ekskul'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Ekstrakulikuler::find($id)->delete();
    return redirect()->route('ekstrakulikuler.index')->with('error', 'Berhasil Menghapus Data ekstrakulikuler ');
  }
  
}

?>