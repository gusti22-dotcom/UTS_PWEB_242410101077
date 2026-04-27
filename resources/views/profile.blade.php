@extends('layouts.app')

@section('content')

<div class="card-modern p-4 mt-4 text-center">

    <div class="mb-3">
        <img src="{{ asset('images/profile.jpeg') }}"
             alt="Foto Profile"
             class="rounded-circle shadow"
             width="140" height="140"
             style="object-fit: cover;">
    </div>

    <h3 class="mb-3">Profile</h3>
    <hr>

    <p><b>Nama:</b> {{ $username }}</p>
    <p><b>Status:</b> Pemilik Inventaris Pribadi</p>

</div>

@endsection
