@extends('layouts.app')

@section('content')

<div class="text-center mt-5 mb-4">
    <h1 class="fw-bold">Sistem Inventaris Pribadi</h1>
    <p class="text-muted">Silakan login untuk melanjutkan</p>
</div>

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card-modern p-4">
            <h4 class="mb-3 text-center">Login</h4>

            <form action="/dashboard" method="POST">
                @csrf

                <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>

                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

                <button class="btn btn-primary w-100">Masuk</button>
            </form>
        </div>
    </div>
</div>

@endsection
