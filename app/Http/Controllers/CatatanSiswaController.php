<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatatanSiswa;

class CatatanSiswaController extends Controller 
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

      if(CatatanSiswa::create($data)){
        return redirect()->back()->with('success', 'Catatan Siswa Berhasil Ditambahkan!');
      }
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
     $catsiswa = CatatanSiswa::findOrFail($id);

     $data = $request->all();

     if($catsiswa->update($data)){
        return redirect()->back()->with('success', 'Catatan Siswa Berhasil Diperbarui!');
     }
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
  
}

?>