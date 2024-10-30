<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_penjualan;
use App\Models\penjualan;
use App\Models\Produk;

class Detail_penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail_penjualan = detail_penjualan::all();
        return view('home.detail_penjualan.index', compact('detail_penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id_menu=Produk::all();
        return view('home.detail_penjualan.tambah',compact('id_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Detail_penjualan::create([
            'id_penjualan' => $request->id_penjualan,
            'id_menu' => $request->id_menu,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'subtotal' => $request->subtotal,
        ]);
        return redirect('/detail_penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail_penjualan = Detail_Penjualan::find($id);
        return view('home.detail_Penjualan.index', compact('detail_penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $detail_penjualan = Detail_Penjualan::find($id);
        return view('home.detail_Penjualan.edit', compact('detail_penjualan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Detail_Penjualan =Detail_Penjualan::find($id);
        $Detail_Penjualan->update([
            'id_menu' => $request->id_menu,
            'harga' => $request->Harga,
            'qty' => $request->qty,
            'subtotal' => $request->Subtotal,
            
        ]);
        return redirect('/detail_Penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Detail_Penjualan = Detail_penjualan::find($id);
        $Detail_Penjualan->delete();
        return redirect('/detail_Penjualan');
    }
}