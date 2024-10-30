@extends('layouts.master')
@section('tilttle', 'penjualan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="contairner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman tambah data penjualan</h3>
                            <a class="btn btn-warning" href="/penjualan">kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/penjualan/simpan" method="post">
                                @csrf
                       <div class="mb-3">
                        <label for="" class="form-label">Nama Customer</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nama_customer"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <label for="" class="form-label">Total Harga</label>
                        <input
                            type="text"
                            class="form-control"
                            name="total_harga"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       </div>
                       <button class="btn btn-primary" type="submit">simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection