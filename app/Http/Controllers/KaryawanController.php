<?php

namespace App\Http\Controllers;
use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Karyawan";
        $karyawan=Karyawan::paginate(5);
        //dd($makanan);
        return view('admin.karyawan',compact('title','karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title="inputkaryawan";
        return view('admin.inputkaryawan',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'required'=> 'kolom:attribut harus lengkap',
            'date'    => 'kolom:attribut harus tanggal',
            'numeric'=> 'kolom:attribut harus angka',
        ];
        $validasi = $request->validate([
            'nama_karyawan' => 'required',
            'alamat' => '',
            'jenis' => '',
        ],$messages);
        //dd($validasi);
        Karyawan::create($validasi);
        return redirect('karyawan')-> with('success','data berhasil di update');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //
        $title="inputkaryawan";
        $karyawan=Karyawan::find($id);
        return view('admin.inputkaryawan',compact('title','karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $messages = [
            'required'=> 'kolom:attribut harus lengkap',
            'date'    => 'kolom:attribut harus tanggal',
            'numeric'=> 'kolom:attribut harus angka',
        ];
        $validasi = $request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'jenis' => 'required',
        ],$messages);
        //dd($validasi);
        Karyawan::whereid_karyawan($id)->update($validasi);
        return redirect('karyawan')-> with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Karyawan::whereid_karyawan($id)->delete();
        return redirect('karyawan')-> with('success','data berhasil di update');
    }
}
