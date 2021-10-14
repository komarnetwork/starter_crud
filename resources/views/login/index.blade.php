@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">

        <!-- Alert -->
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Alert Login Error -->
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="name@example.com" autofocus required>
                    <label for="email">Email address</label>
                    <!-- Invalid Feedback -->
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not register? <a href="/register" class="text-decoration-none">Register Now!</a></small>
            <p class="mt-5 mb-3 text-muted text-center">Komar Network &copy; 2021–2022</p>

        </main>
    </div>
</div>

@endsection
