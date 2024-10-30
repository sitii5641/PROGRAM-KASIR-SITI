@extends('layouts.master');
@section('title','user');
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="contairner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman edit data user</h3>
                            <a class="btn btn-warning" href="/user">kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{ $user->id }}/update" method="post">
                                @csrf
                       <div class="mb-3">
                        <label for="" class="form-label">Nama User</label>
                        <input
                            type="Nama_User"
                            class="form-control"
                            name="name"
                            value="{{ $user->name }}"
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
                            value="{{ $user->email }}"
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
                            value="{{ $user->password }}"
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