<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Prestasi;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class PrestasiController extends Controller 
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
    $data = $request->only('id_siswa','nama_prestasi', 'saran_saran', 'tahun_prestasi', 'jenis_prestasi', 'penyelenggara', 'peringkat');
    if ($request->hasFile('foto_prestasi')) {
      $data['foto_prestasi'] = $this->savePhoto($request->file('foto_prestasi'));
    }
    
    Prestasi::create($data);

    return redirect()->back();
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
    $data = $request->only('id_siswa','nama_prestasi', 'saran_saran', 'tahun_prestasi', 'jenis_prestasi', 'penyelenggara', 'peringkat');
    $prestasi = Prestasi::findOrFail($id);
    if ($request->hasFile('foto_prestasi')) {
      $data['foto_prestasi'] = $this->savePhoto($request->file('foto_prestasi'));
      if ($prestasi->foto_prestasi !== null)
      {
        $this->deletePhoto($prestasi->foto_prestasi);
      }
    }
    if ($prestasi->update($data)) {
      return redirect()->back()->with('success', 'Berhasil Memperbarui Prestasi Siswa');
    } else {
      return redirect()->back()->with('error', 'Gagal Memperbarui Prestasi Siswa');
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
  protected function savePhoto(UploadedFile $photo) 
    { 
        $fileName = str_random(20) . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img-prestasi';
        $photo->move($destinationPath, $fileName);
        return $fileName;
    }
    public function deletePhoto($filename) 
    { 
      $path = public_path() . DIRECTORY_SEPARATOR . 'img-prestasi' . DIRECTORY_SEPARATOR . $filename; 
      return File::delete($path); 
    }
  
}

?>