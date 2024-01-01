<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Agama::all();
        return view('agama.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agama.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agama = new Agama;
        $agama->agama = $request->agama;
        $agama->save();
        return redirect('/agama');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agama $agama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agama $agama)
    {
        return view('agama.edit', compact('agama'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agama $agama)
    {
        $agama->agama = $request->agama;
        $agama->save();
        return redirect('/agama');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agama $agama)
    {
        $agama->delete();
        return redirect('/agama');
    }
}
