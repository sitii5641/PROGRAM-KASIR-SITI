@extends('layouts.master')
@section('tilttle', 'user')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="contairner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman tambah data user</h3>
                            <a class="btn btn-warning" href="/user">kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="post">
                                @csrf
                       <div class="mb-3">
                        <label for="" class="form-label">Nama User</label>
                        <input
                            type="Nama_User"
                            class="form-control"
                            name="name"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       <div class="mb-3">
                        <label for="" class="form-label">email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                       </div>
                       <div class="mb-3">
                        <label for="" class="form-label">password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
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