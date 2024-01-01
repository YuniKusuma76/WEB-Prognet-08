<?php

namespace App\Http\Controllers;

use App\Models\Hubungankk;
use Illuminate\Http\Request;

class HubungankkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Hubungankk::all();
        return view('hubungankk.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Hubungankk.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hubungankk = new Hubungankk;
        $hubungankk->hubungankk = $request->hubungankk;
        $hubungankk->save();
        return redirect('/hubungankk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hubungankk $hubungankk)
    {
        return view('hubungankk.edit', compact('hubungankk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hubungankk $hubungankk)
    {
        $hubungankk->hubungankk = $request->hubungankk;
        $hubungankk->save();
        return redirect('/hubungankk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hubungankk $hubungankk)
    {
        $hubungankk->delete();
        return redirect('/hubungankk');
    }
}
