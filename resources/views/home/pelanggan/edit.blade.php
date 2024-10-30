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
                            <h3>halaman edit data pelanggan</h3>
                            <a class="btn btn-warning" href="/pelanggan">kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/pelanggan/{{ $pelanggan->id }}/update" method="post">
                                @csrf
                       <div class="mb-3">
                        <label for="" class="form-label">Nama pelanggan</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nama_pelanggan"
                            value="{{ $pelanggan->nama_pelanggan }}"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       <div class="mb-3">
                        <label for="" class="form-label">alamat</label>
                        <input
                            type="text"
                            class="form-control"
                            name="alamat"
                            id=""
                            value="{{ $pelanggan->alamat }}"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       <div class="mb-3">
                        <label for="" class="form-label">nomor_telepon</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nomor_telepon"
                            id=""
                            value="{{ $pelanggan->nomor_telepon }}"
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