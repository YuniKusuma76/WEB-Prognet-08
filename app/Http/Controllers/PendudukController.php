<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Agama;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $agama = Agama::where('agama_id', $agama->id)->get();
        $data = Penduduk::all();
        return view('penduduk.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agama = Agama::all();
        return view('penduduk.new', compact('agama'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $penduduk = new Penduduk;
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->alamat = $request->alamat;
        $penduduk->lahir = $request->lahir;
        $penduduk->agama_id = $request->agama_id;
        $penduduk->save();
        return redirect('/penduduk');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penduduk $penduduk)
    {
        $agama = Agama::all();
        return view('penduduk.edit', compact('penduduk', 'agama'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->alamat = $request->alamat;
        $penduduk->lahir = $request->lahir;
        $penduduk->agama_id = $request->agama_id;
        $penduduk->save();
        return redirect('/penduduk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect('/penduduk');
    }
}
