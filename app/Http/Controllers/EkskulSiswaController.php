<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EkskulSiswa;

class EkskulSiswaController extends Controller 
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
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $data = $request->all();
    EkskulSiswa::create($data);

    return redirect()->back()->with('success', 'Berhasil Menambah ekstrakulikuler Siswa');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
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
  public function update(Request $request, $id)
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
    $ekskul_siswa = EkskulSiswa::find($id)->delete();
    return redirect()->back()->with('error', 'Berhasil Menghapus Ekstrakulikuler Siswa ');
  }
  
}

?>