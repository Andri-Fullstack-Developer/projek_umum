<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $be = DB::table('berita')->get();
        // return view('dasboard.dasboard', compact('be'));
        //return view('/', compact('be'));
    }
    public function berita_index(){
        
        $home = DB::table('berita')->get();
        return view('welcome', compact('berita'));
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
        //dd($request->all());
        $this->validate($request, [
            'image' => 'required|mimes:png,jpg,jpeg'
        ], [
            'image.required' => 'File gambar harus diisi',
            'image.mimes' => 'Format file gambar harus png, jpg, atau jpeg'
        ]);

        $name_home = $request->image->getClientOriginalName();
        $request->image->move(public_path('storeImg'), $name_home);

        DB::table('berita')->insert([
            'name' =>$request->name,
            'image' => $name_home,
            'agenda' =>$request->agenda,
        ]);


        return back()->with('success', 'Terimakasih, Anda sudah berhasil meunggah Beita.');
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
