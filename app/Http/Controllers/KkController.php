<?php

namespace App\Http\Controllers;

use App\Models\Kk;
use Illuminate\Http\Request;

class KkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kk::all();
        return view('Kk.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kk.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kk = new Kk;
        $kk->nokk = $request->nokk;
        $kk->statusaktif = $request->statusaktif;
        $kk->save();
        return redirect('/kk');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kk $kk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kk $kk)
    {
        return view('kk.edit', compact('kk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kk $kk)
    {
        $kk->nokk = $request->nokk;
        $kk->statusaktif = $request->statusaktif;
        $kk->save();
        return redirect('/kk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kk $kk)
    {
        $kk->delete();
        return redirect('/kk');
    }
}
