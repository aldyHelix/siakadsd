<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiSiswa;

class NilaiSiswaController extends Controller 
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
  public function update(Request $request, $id)
  {
          //$request->id_
          $nilaisiswa = NilaiSiswa::findOrFail($id);
          $data = $request->all();
    
          $nilaisiswa->update($data);
    
          return redirect()->back()->with('success', 'Sukses Menyimpan Data');
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

  public function tglupdate(Request $request, $id)
  {
      //$request->id_
      $nilaisiswa = NilaiSiswa::findOrFail($id);
      $data = $request->all();

      $nilaisiswa->update($data);

      return redirect()->back()->with('success', 'Sukses Menyimpan Data');
  }
  
}

?>