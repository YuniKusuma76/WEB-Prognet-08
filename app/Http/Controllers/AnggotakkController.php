<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Anggotakk;
use App\Models\Hubungankk;
use App\Models\Kk;
use Illuminate\Http\Request;

class AnggotakkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Anggotakk::all();
        return view('anggotakk.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kk = Kk::all();
        $penduduk = Penduduk::all();
        $hubungankk = Hubungankk::all();
        return view('anggotakk.new', compact('kk', 'penduduk', 'hubungankk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anggotakk = new Anggotakk;
        $anggotakk->kk_id = $request->kk_id;
        $anggotakk->penduduk_id = $request->penduduk_id;
        $anggotakk->hubungankk_id = $request->hubungankk_id;
        $anggotakk->statusaktif = $request->statusaktif;
        $anggotakk->user_id = $request->user_id;
        $anggotakk->save();
        return redirect('/anggotakk');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggotakk $anggotakk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggotakk $anggotakk)
    {
        $kk = Kk::all();
        $penduduk = Penduduk::all();
        $hubungankk = Hubungankk::all();
        return view('anggotakk.edit', compact('anggotakk', 'kk', 'penduduk', 'hubungankk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggotakk $anggotakk)
    {
        $anggotakk->kk_id = $request->kk_id;
        $anggotakk->penduduk_id = $request->penduduk_id;
        $anggotakk->hubungankk_id = $request->hubungankk_id;
        $anggotakk->statusaktif = $request->statusaktif;
        $anggotakk->user_id = $request->user_id;
        $anggotakk->save();
        return redirect('/anggotakk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggotakk $anggotakk)
    {
        $anggotakk->delete();
        return redirect('/anggotakk');
    }
}
