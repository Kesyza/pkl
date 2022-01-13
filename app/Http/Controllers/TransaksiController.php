<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Sewa;
use App\Models\Sopir;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('admin.transaksi.index', compact('transaksi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sewa = Sewa::all();
        $mobil = Mobil::all();
        $sopir = Sopir::all();
        return view('admin.transaksi.create', compact('sewa', 'mobil', 'sopir'));

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
            'id_sewa' => 'required',
            'id_mobil' => 'required',
            'id_sopir' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah_bayar' => 'required',
            'denda' => 'required',
        ]);

        $transaksi = new Transaksi;
        $transaksi->id_sewa = $request->id_sewa;
        $transaksi->id_mobil = $request->id_mobil;
        $transaksi->id_sopir = $request->id_sopir;
        $transaksi->tanggal_kembali = $request->tanggal_kembali;
        $transaksi->jumlah_bayar = $request->jumlah_bayar;
        $transaksi->denda = $request->denda;
        $transaksi->save();
        return redirect()->route('transaksi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.show', compact('transaksi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $sewa = Sewa::all();
        $mobil = Mobil::all();
        $sopir = Sopir::all();
        return view('admin.transaksi.edit', compact('transaksi', 'sewa', 'mobil', 'sopir'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_sewa' => 'required',
            'id_mobil' => 'required',
            'id_sopir' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah_bayar' => 'required',
            'denda' => 'required',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id_sewa = $request->id_sewa;
        $transaksi->id_mobil = $request->id_mobil;
        $transaksi->id_sopir = $request->id_sopir;
        $transaksi->tanggal_kembali = $request->tanggal_kembali;
        $transaksi->jumlah_bayar = $request->jumlah_bayar;
        $transaksi->denda = $request->denda;
        $transaksi->save();
        return redirect()->route('transaksi.index')->with('status', 'Data Berhasil ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('status', 'Data Berhasil dihapus!');

    }
}
