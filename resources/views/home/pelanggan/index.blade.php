@extends('layouts.master');
@section('title','pelanggan');
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="contairner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman data pelanggan</h3>
                            <a class="btn btn-primary" href="/pelanggan/tambah">Tambah</a>
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
                                        <th scope="col">nama_pelanggan</th>
                                        <th scope="col">alamat</th>
                                        <th scope="col">nomor_telepon</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pelanggan as $pelanggan)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$pelanggan->nama_pelanggan}}</td>
                                        <td>{{$pelanggan->alamat}}</td>
                                        <td>{{$pelanggan->nomor_telepon}}</td>
                                        <td><a class="btn btn-warning" href="/pelanggan/{{ $pelanggan->id }}/show">Edit</a>
                                            <a class="btn btn-danger" href="/pelanggan/{{ $pelanggan->id }}/delete"
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