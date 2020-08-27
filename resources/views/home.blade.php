@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Selamat Datang</h3>
                </div>
                <div class="card-body">
                    <a href="/posts" class="btn btn-success btn btn-md">Lihat Data</a>
                    <a href="/posts/create" class="btn btn-primary btn btn-md">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
