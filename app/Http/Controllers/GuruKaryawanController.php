<?php 

namespace App\Http\Controllers;
use App\GuruKaryawan;
use Illuminate\Http\Request;

class GuruKaryawanController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $guru = GuruKaryawan::paginate(10);
    return view('guru.guru-data', compact('guru'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('guru.guru-tambah');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'nama' => 'required|string|max:255', 
      'jenis_kelamin'  => 'required', 
      'NIP' => 'required|numeric',
      'NUPTK' => 'sometimes|numeric', 
      'tempat_lahir' => 'required|string|max:255', 
      'tgl_lahir' => 'required|date', 
      'status_guru' => 'required|string|max:255', 
      'golongan'  => 'required|string|max:255', 
      'pendidikan_terakhir' => 'required|string|max:255', 
      'jabatan' => 'required|string|max:255', 
      'tipe_guru' => 'required|string|max:255', 
      'agama' => 'required|string|max:255', 
      'alamat' => 'required|string',
      'foto_guru' => 'mimes:jpeg,png,jpg|max:10240'
    ]);
    $data = $request->only('nama', 'NIP', 'NUPTK', 'tempat_lahir', 'agama', 'status_guru', 'golongan', 'pendidikan_terakhir', 'jenis_kelamin', 'jabatan', 'alamat', 'tipe_guru', 'tgl_lahir');
    if ($request->hasFile('foto_guru')) {
      $data['foto_guru'] = $this->savePhoto($request->file('foto_guru'));
    }
    GuruKaryawan::create($data);
    return redirect()->route('gurukaryawan.index')->with('success', 'Berhasil Menambahkan Data Guru ' .$request->get('nama'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $guru = GuruKaryawan::findOrFail($id);
    return view('guru.guru-details', compact('guru'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $guru = GuruKaryawan::findOrFail($id);
    return view('guru.guru-edit', compact('guru'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    $guru = GuruKaryawan::findOrFail($id);

      $data = $request->only('nama', 'NIP', 'NUPTK', 'tempat_lahir', 'agama', 'status_guru', 'golongan', 'pendidikan_terakhir', 'jenis_kelamin', 'jabatan', 'alamat', 'tipe_guru', 'tgl_lahir');
      if ($request->hasFile('foto_guru')) {
        $data['foto_guru'] = $this->savePhoto($request->file('foto_guru'));
        if ($guru->foto_guru !== null)
        {
          $this->deletePhoto($guru->foto_guru);
        }
      }
    $guru->update($data);
    return redirect()->route('gurukaryawan.index')->with('success', 'Berhasil Mengubah Data Guru ' .$request->get('nama'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    GuruKaryawan::find($id)->delete();
    return redirect()->route('gurukaryawan.index')->with('error', 'Berhasil Menghapus Data Guru');
  }
  protected function savePhoto(UploadedFile $photo) 
    { 
        $fileName = str_random(20) . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img-guru';
        $photo->move($destinationPath, $fileName);
        return $fileName;
    }
  public function deletePhoto($filename) 
    { 
      $path = public_path() . DIRECTORY_SEPARATOR . 'img-guru' . DIRECTORY_SEPARATOR . $filename; 
      return File::delete($path); 
    }
  
}

?>