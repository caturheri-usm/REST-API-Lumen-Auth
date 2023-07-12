<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function showAll()
    {
        return response()->json(Pegawai::all());
    }
    public function showOne($id)
    {
        return response()->json(Pegawai::find($id));
    }
    public function create(Request $request)
    {
        $Pegawai = Pegawai::create($request->all());
        return response()->json($Pegawai, 201);
    }
    public function update($id, Request $request)
    {
        $Pegawai = Pegawai::findOrFail($id);
        $Pegawai->update($request->all());
        return response()->json($Pegawai, 200);
    }
    public function delete($id)
    {
        Pegawai::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
