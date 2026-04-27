@extends('layouts.app')

@section('content')

<h3 class="mt-4 mb-3">Data Inventaris Pribadi</h3>

<div class="mb-3">
    <a href="/pengelolaan?username={{ $username }}&filter=Semua"
       class="btn btn-sm {{ $filter=='Semua' ? 'btn-primary' : 'btn-primary' }}">
       Semua
    </a>

    <a href="/pengelolaan?username={{ $username }}&filter=Elektronik"
       class="btn btn-sm {{ $filter=='Elektronik' ? 'btn-success': 'btn-success' }}">
       Elektronik
    </a>

    <a href="/pengelolaan?username={{ $username }}&filter=Makeup"
       class="btn btn-sm {{ $filter=='Makeup' ?  'btn-info': 'btn-info' }}">
       Makeup
    </a>

    <a href="/pengelolaan?username={{ $username }}&filter=ATK"
       class="btn btn-sm {{ $filter=='ATK' ?  'btn-warning': 'btn-warning' }}">
       ATK
    </a>

    <a href="/pengelolaan?username={{ $username }}&filter=Obat"
       class="btn btn-sm {{ $filter=='Obat' ?  'btn-danger': 'btn-danger' }}">
       Obat
    </a>
</div>

<div class="row">
    @foreach($barang as $item)
    <div class="col-md-4">
        <div class="card-modern p-3 mb-3">
            <h5>{{ $item['nama'] }}</h5>
            <p class="text-muted">{{ $item['kategori'] }}</p>

            <span class="badge bg-primary">
                {{ $item['jumlah'] }} item
            </span>
        </div>
    </div>
    @endforeach
</div>

@endsection
