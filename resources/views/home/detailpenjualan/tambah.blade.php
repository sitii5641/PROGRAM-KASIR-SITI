@extends('layouts.master')
@section('tilttle', 'detailpenjualan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="contairner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman tambah data detailpenjualan</h3>
                            <a class="btn btn-warning" href="/detailpenjualan">kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/detailpenjualan/simpan" method="post">
                                @csrf
                       <div class="mb-3">
                       <label for="" class="form-label">id produk</label>
                        <input
                            type="text"
                            class="form-control"
                            name="id_produk"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <label for="" class="form-label">jumlah produk</label>
                        <input
                            type="text"
                            class="form-control"
                            name="jumlah_produk"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       <div class="mb-3">
                        <label for="" class="form-label">subtotal</label>
                        <input
                            type="text"
                            class="form-control"
                            name="subtotal"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
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