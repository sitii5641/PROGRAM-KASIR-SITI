@extends('layouts.master');
@section('title','penjualan');
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="contairner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman edit data penjualan</h3>
                            <a class="btn btn-warning" href="/penjualan">kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/penjualan/{{ $penjualan->id }}/update" method="post">
                                @csrf
                       <div class="mb-3">
                        <label for="" class="form-label">tanggal_penjualan</label>
                        <input
                            type="text"
                            class="form-control"
                            name="tanggal_penjualan"
                            value="{{ $penjualan->tanggal_penjualan }}"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       <div class="mb-3">
                        <label for="" class="form-label">total_harga</label>
                        <input
                            type="text"
                            class="form-control"
                            name="total_harga"
                            id=""
                            value="{{ $penjualan->total_harga }}"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       <button class="btn btn-primary" type="submit">update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection