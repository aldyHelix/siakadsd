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
    $guru = GuruKaryawan::get();
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
    ]);
    $data = $request->all();
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
  public function update($request, $id)
  {
    $guru = GuruKaryawan::findOrFail($id);
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
      ]);
    $siswa->update($request->all());
    return redirect()->route('guru.index')->with('success', 'Berhasil Mengubah Data Guru ' .$request->get('nama'));
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
  
}

?>