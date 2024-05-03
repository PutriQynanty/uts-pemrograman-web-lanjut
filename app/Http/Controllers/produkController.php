<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Halaman produk
        return view('produk/produk');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman tambah produk
        return view('produk/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Simpan tambah produk
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Halaman detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Halaman edit produk
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Simpan edit produk
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Hapus produk
    }
}
