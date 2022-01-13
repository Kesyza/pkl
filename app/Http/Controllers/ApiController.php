<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sopir;

class ApiController extends Controller
{
    public function dataSopir(){
        $sopir = Sopir::all();
        
        //ubah ke JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Sopir',
            'data'    => $sopir  
        ], 200);
    }
}
