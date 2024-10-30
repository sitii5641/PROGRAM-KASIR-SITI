<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\DetailPenjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        $pelanggan = Penjualan::all();
        return view('home.penjualan.index', compact('penjualan', 'pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penjualan = Penjualan::all();
        $pelanggan = Penjualan::all();
        return view('home.penjualan.tambah', compact('penjualan', 'pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Penjualan::create([
            'nama_customer' => $request->nama_customer,
            'total_harga' => $request->total_harga,
            'transaksi' => $request->total_harga,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjualan = Penjualan::find($id);
        return view('home.penjualan.edit', compact('penjualan'));
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
        $penjualan = Penjualan::find($id);
        $penjualan->update([
           
            'nama_customer' => $request->nama_customer,
            'total_harga' => $request->total_harga,
            'transaksi' => $request->transaksi,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }

    public function struk($id)
    {
    $penjualan = detailpenjualan::find($id);
    return view('home.penjualan.struk',compact('penjualan'));
    }

    public function transaksi($id)
    {
    $penjualan = detailpenjualan::find($id);
    return view('home.penjualan.transaksi',compact('penjualan'));
    }




}