<?php

namespace App\Http\Controllers;

use App\Models\Sopir;
use Illuminate\Http\Request;

class SopirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sopir = Sopir::all();
        return view('admin.sopir.index', compact('sopir'));

        // //ubah ke JSON
        // return response()->json([
        //     'success' => true,
        //     'message' => 'List Data Sopir',
        //     'data'    => $sopir  
        // ], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sopir.create');

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
            'nama_sopir' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
        ]);

        $sopir = new Sopir;
        $sopir->nama_sopir = $request->nama_sopir;
        $sopir->alamat = $request->alamat;
        $sopir->nomor_hp = $request->nomor_hp;
        $sopir->save();
        return redirect()->route('sopir.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sopir = Sopir::findOrFail($id);
        return view('admin.sopir.show', compact('sopir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sopir = Sopir::findOrFail($id);
        return view('admin.sopir.edit', compact('sopir'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sopir' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
        ]);

        $sopir = Sopir::findOrFail($id);
        $sopir->nama_sopir = $request->nama_sopir;
        $sopir->alamat = $request->alamat;
        $sopir->nomor_hp = $request->nomor_hp;
        $sopir->save();
        return redirect()->route('sopir.index')->with('status', 'Data Berhasil ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sopir = Sopir::findOrFail($id);
        $sopir->delete();
        return redirect()->route('sopir.index')->with('status', 'Data Berhasil dihapus!');

    }
}
