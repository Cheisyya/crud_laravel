<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSiswaRequest;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $siswa = Siswa::all();

        return response()->json([
            'siswa'=> $siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     //Menambahkan Data Siswa
    public function store(StoreSiswaRequest $request)
    {
        $siswas = Siswa::create($request->all());

        if($siswas) {

            return response()->json([
                'message' => 'Berhasil Menambahkan Data Siswa'
            ], 201);

        } 

        //failed save to database
        return response()->json([
            'message' => 'Gagal Menambahkan Data Siswa',
        ], 409);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSiswaRequest $request, Siswa $siswa)
    {
        $siswa->update($request->all());

        if($siswa) {

            return response()->json([
                'message' => 'Berhasil Edit Data Siswa'
            ], 200);

        } 

        //failed save to database
        return response()->json([
            'message' => 'Gagal Edit Data Siswa',
        ], 404);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        if($siswa) {
            return response()->json([
                'message' => 'Berhasil Hapus Data Siswa',
            ], 200);

        }

        //data not found
        return response()->json([
            'message' => 'Gagal Hapus Data Siswa',
        ], 404);
    }
}

