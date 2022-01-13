<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use App\Models\Sewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewa = Sewa::with('penyewas')->get();
        return view('admin.sewa.index', compact('sewa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyewa = Penyewa::all();
        return view('admin.sewa.create', compact('penyewa'));

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
            'nomor_nota' => 'required',
            'id_penyewa' => 'required',
            'tanggal_sewa' => 'required',
            'jaminan' => 'required',
            'status_sewa' => 'required',
        ]);

        $sewa = new Sewa;
        $sewa->nomor_nota = $request->nomor_nota;
        $sewa->id_penyewa = $request->id_penyewa;
        $sewa->tanggal_sewa = $request->tanggal_sewa;
        $sewa->jaminan = $request->jaminan;
        $sewa->status_sewa = $request->status_sewa;
        $sewa->save();
        return redirect()->route('sewa.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sewa = Sewa::findOrFail($id);
        return view('admin.sewa.show', compact('sewa'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sewa = Sewa::findOrFail($id);
        $penyewa = Penyewa::all();
        return view('admin.sewa.edit', compact('sewa', 'penyewa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_nota' => 'required',
            'id_penyewa' => 'required',
            'tanggal_sewa' => 'required',
            'jaminan' => 'required',
            'status_sewa' => 'required',
        ]);

        $sewa = Sewa::findOrFail($id);
        $sewa->nomor_nota = $request->nomor_nota;
        $sewa->id_penyewa = $request->id_penyewa;
        $sewa->tanggal_sewa = $request->tanggal_sewa;
        $sewa->jaminan = $request->jaminan;
        $sewa->status_sewa = $request->status_sewa;
        $sewa->save();
        return redirect()->route('sewa.index')->with('status', 'Data Berhasil ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->delete();
        return redirect()->route('sewa.index')->with('status', 'Data Berhasil dihapus!');

    }
}
