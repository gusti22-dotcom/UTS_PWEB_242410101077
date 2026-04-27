@extends('layouts.app')

@section('content')

<div class="mt-5">
    <h2 class="fw-bold">Halo, {{ $username }}</h2>
    <p class="text-muted">Selamat datang di sistem inventaris pribadi</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card-modern p-3">
                <h6>Total Barang</h6>
                <h3 class="text-primary">9</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-modern p-3">
                <h6>Kategori</h6>
                <h3 class="text-success">3</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-modern p-3">
                <h6>Status</h6>
                <h3 class="text-warning">Aktif</h3>
            </div>
        </div>
    </div>
</div>

@endsection
