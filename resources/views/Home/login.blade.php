@extends('index')

@section('title')
    <title>Ayuh Cook - Sign In</title>
@endsection

@section('css_dependencies')
    <style>
        .form {
            max-width: 500px;
            padding-top: 5rem;
            padding-bottom: 5rem;
            min-height: 60vh;
        }
    </style>
@endsection

@section('content')
    <div class="form mx-auto">
        <h2 class="text-danger fw-bold text-center pt-4">Sign In</h2>
        <p class="fst-italic text-center pb-4">Wake up it f00d's o clock</p>

        <form action="/sign-in" method="POST" class="p-2">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="*****">
            </div>

            <div class="d-grid gap-2 pt-5">
                <button class="btn btn-danger">Sign In</button>
                <a href="/register" class="btn btn-outline-danger">Sign Up</a>
                <small><a href="/forget-password" class="text-decoration-none">Forget your password?</a></small>
            </div>
        </form>
    </div>
@endsection

@section('script')
@endsection

@section('js_dependencies')
@endsection
