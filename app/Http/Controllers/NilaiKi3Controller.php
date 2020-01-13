<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiKi3;

class NilaiKi3Controller extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
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
  public function update(Request $request ,$id)
  {
    $dt = $request->dt;
    NilaiKi3::findOrFail($id)->update($dt);
    $nil = NilaiKi3::where('id_nilai_ki3', $id)->first();
    return redirect()->back()->with('success', 'Success Update Nilai '.$nil->kompetensi_dasar->mata_pelajaran->nama_mata_pelajaran);
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