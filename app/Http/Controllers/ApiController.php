<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sopir;

class ApiController extends Controller
{
    public function index(){
        //menampilkan data sopir pada JSON
        $sopir = Sopir::all();

        //ubah ke JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Sopir',
            'data'    => $sopir  
        ], 200);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //menambah data sopir pada JSON
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

        //ubah ke JSON
        return response()->json([
            'success' => true,
            'message' => 'List Tambah Sopir',
            'data'    => $sopir  
        ], 200);
    }

    public function show($id){
        //menampilkan data sopir pada JSON
        $sopir = Sopir::findOrFail($id);

        //ubah ke JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Sopir',
            'data'    => $sopir  
        ], 200);
    }

    public function edit(){
        //
    }

    public function update(){
        //
    }

    public function destroy(){
        //
    }
}
