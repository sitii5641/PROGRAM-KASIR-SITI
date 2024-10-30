@extends('layouts.master');
@section('title','detailpenjualan');
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="contairner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman data detailpenjualan</h3>
                            <a class="btn btn-primary" href="/detailpenjualan/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                        <div
                            class="table-responsive"
                        >
                            <table
                                class="table table-bordered table-striped" id="datatable"
                            >
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">id_produk</th>
                                        <th scope="col">jumlah_produk</th>
                                        <th scope="col">subtotal</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($detailpenjualan as $detailpenjualan)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$detailpenjualan->id_produk}}</td>
                                        <td>{{$detailpenjualan->jumlah_produk}}</td>
                                        <td>{{$detailpenjualan->subtotal}}</td>
                                        <td>
                                            <a class="btn btn-danger" href="/detailpenjualan/{{ $detailpenjualan->id }}/delete"
                                            onclick="return confirm('yakin mau di hapus ?')">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection