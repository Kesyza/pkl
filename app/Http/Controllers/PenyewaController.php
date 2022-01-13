<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyewa = Penyewa::all();
        return view('admin.penyewa.index', compact('penyewa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penyewa.create');

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
            'nama_lengkap' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jk' => 'required',
            'nomor_hp' => 'required',
            'alamat_lengkap' => 'required',
        ]);

        $penyewa = new Penyewa;
        $penyewa->nama_lengkap = $request->nama_lengkap;
        $penyewa->email = $request->email;
        $penyewa->password = $request->password;
        $penyewa->jk = $request->jk;
        $penyewa->nomor_hp = $request->nomor_hp;
        $penyewa->alamat_lengkap = $request->alamat_lengkap;
        $penyewa->save();
        return redirect()->route('penyewa.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyewa  $penyewa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('admin.penyewa.show', compact('penyewa'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyewa  $penyewa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('admin.penyewa.edit', compact('penyewa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyewa  $penyewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jk' => 'required',
            'nomor_hp' => 'required',
            'alamat_lengkap' => 'required',
        ]);

        $penyewa = Penyewa::findOrFail($id);
        $penyewa->nama_lengkap = $request->nama_lengkap;
        $penyewa->email = $request->email;
        $penyewa->password = $request->password;
        $penyewa->jk = $request->jk;
        $penyewa->nomor_hp = $request->nomor_hp;
        $penyewa->alamat_lengkap = $request->alamat_lengkap;
        $penyewa->save();
        return redirect()->route('penyewa.index')->with('status', 'Data Berhasil ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyewa  $penyewa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penyewa = Penyewa::findOrFail($id);
        $penyewa->delete();
        return redirect()->route('penyewa.index')->with('status', 'Data Berhasil dihapus!');

    }
}
