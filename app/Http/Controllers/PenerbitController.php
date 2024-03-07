<?php

namespace App\Http\Controllers;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public $penerbit;
    public function __construct()
    {
        $this->penerbit = new Penerbit();
    }
    public function index()
    {
        $no = 1;
        $penerbit = Penerbit::all();
        return view('admin.indexpenerbit', compact('penerbit','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        return view('admin.createpenerbit', compact('penerbit')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // dd($request->all()); 
                $rules=[
                    //format penulisan unique = unique:nama_table,field_table
                    // 'sampul' => 'required|mimes:jpg,png|max:80'
                    // 'judul' => 'required|max:3'
                ];
                //bikin pesan error
                $messages=[
                    'required' => 'isilah woiiii !!!',
                    'max' => ':ukuran terlalu besar jumlah tidak sesuai',
                    'mimes' => ':ekstensi file tidak di dukung, silahkan gunakan (jpg/png)'
                ];
        
                $this->validate($request, $rules, $messages);
        
        
                
                // $gambar = $request->sampul;
        
                //getClientOriginalExtension() = untuk mendapatkan ekstensi file
                //getClientOriginalName() = untuk mendapatkan nama asli file
                // $namaFile = time() .rand(100, 900). "." .$gambar->getClientOriginalExtension();
                // $this->penerbit->sampul = $namaFile;
                $this->penerbit->kode = $request->kode;
                $this->penerbit->nama = $request->nama;
                $this->penerbit->alamat = $request->alamat;
                $this->penerbit->kota = $request->kota;
                $this->penerbit->telepon = $request->telepon;
        
        
                //pindahin gambar asli ke dalam folder publik
                // $gambar->move(public_path(). '/upload', $namaFile);
        
                $this->penerbit->save();
                return redirect()->route('indexpenerbit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
