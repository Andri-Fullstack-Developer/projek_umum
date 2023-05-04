<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ho = DB::table('home')->select('image')->get();
        $title = "dashboard";
        return view('dasboard.dasboard', compact('ho'), ['menu' => 'home']);

        
    }
    public function berita(){
        $ho = DB::table('berita')->get();
        return view('dasboard.dasboard', compact('ho'), ['menu' => 'berita']);
    }

    public function jabatan(){
        $ho = DB::table('jabatan')->get();
        return view('dasboard.dasboard', compact('ho'), ['menu' => 'penjabat']);
    }

    public function organisasi(){
        $ho = DB::table('organisasi')->get();
        return view('dasboard.dasboard', compact('ho'), ['menu' => 'organisasi']);
    }
    public function tugas(){
        $ho = DB::table('tugas')->get();
        return view('dasboard.dasboard', compact('ho'), ['menu' => 'tugas']);
    }

    public function index_home(){
        $home = DB::table('home')->select('image')->get();
        return view('welcome', compact('home')); 
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

        DB::table('home')->insert([
            'image' => $name_home,
        ]);


        return back()->with('success', 'Terimakasih, Anda sudah berhasil meunggah foto.');
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
        $imageName = $request->get('image');
    
        // hapus file gambar dari folder 'thumbnail'
        Storage::delete('storeImg/' . $imageName);
        
        // hapus data gambar dari database
        return redirect()->back()->with('success', 'Gambar berhasil dihapus');

    }
}
