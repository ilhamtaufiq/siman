<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makam;

class MakamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function info(Request $request)
    {
        $id = $request->id;
        $data = Makam::where('id', $id)->first();

        return view('info', compact('data'));
    }

    public function qr(Request $request)
    {
        $id = $request->id;
        $data = Makam::where('id', $id)->get('id')->first();

        return view('qr', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
