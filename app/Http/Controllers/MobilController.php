<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::all();
        return view('admin.mobil.index', compact('mobil'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobil.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'merek_mobil' => 'required',
            'nomor_polisi' => 'required',
            'tahun_pembuatan' => 'required',
            'harga_mobil' => 'required',
            'kapasitas_penumpang' => 'required',
            'fasilitas_mobil' => 'required',
            'status_mobil' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        $mobil = new Mobil;
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->merek_mobil = $request->merek_mobil;
        $mobil->nomor_polisi = $request->nomor_polisi;
        $mobil->tahun_pembuatan = $request->tahun_pembuatan;
        $mobil->harga_mobil = $request->harga_mobil;
        $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
        $mobil->fasilitas_mobil = $request->fasilitas_mobil;
        $mobil->status_mobil = $request->status_mobil;

        if ($request->hasFile('gambar')) {
            $mobil->deleteImage();
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->save();
        return redirect()->route('mobil.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('admin.mobil.show', compact('mobil'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('admin.mobil.edit', compact('mobil'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'merek_mobil' => 'required',
            'nomor_polisi' => 'required',
            'tahun_pembuatan' => 'required',
            'harga_mobil' => 'required',
            'kapasitas_penumpang' => 'required',
            'fasilitas_mobil' => 'required',
            'status_mobil' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        $mobil = Mobil::findOrFail($id);
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->merek_mobil = $request->merek_mobil;
        $mobil->nomor_polisi = $request->nomor_polisi;
        $mobil->tahun_pembuatan = $request->tahun_pembuatan;
        $mobil->harga_mobil = $request->harga_mobil;
        $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
        $mobil->fasilitas_mobil = $request->fasilitas_mobil;
        $mobil->status_mobil = $request->status_mobil;

        if ($request->hasFile('gambar')) {
            $mobil->deleteImage();
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/mobil/', $name);
            $mobil->gambar = $name;
        }
        
        $mobil->save();
        return redirect()->route('mobil.index')->with('status', 'Data Berhasil ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->deleteImage();
        $mobil->delete();
        return redirect()->route('mobil.index')->with('status', 'Data Berhasil dihapus!');

    }
}
