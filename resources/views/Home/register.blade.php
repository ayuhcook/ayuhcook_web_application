@extends('index')

@section('title')
    <title>Ayuh Cook - Sign In</title>
@endsection

@section('css_dependencies')
    <style>
        .form {
            margin-top: 50px;
            max-width: 500px;
            padding-top: 5rem;
            padding-bottom: 5rem;
            min-height: 60vh;
        }
    </style>
@endsection

@section('content')
    <div class="form mx-auto ">
        <h2 class="text-danger fw-bold text-center pt-4">Register</h2>
        <p class="fst-italic text-center pb-4">Express your joy & happiness by cooking :D</p>
        <form action="" class="p-2">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label for="name" class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="Engku Nazri" id="name">
                </div>
                <div class="col">
                    <label for="name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Engku Nasir" id="name">
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="*****">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" aria-label="Select your gender">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="2">Prefer Not To Say</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="profession" class="form-label">Profession</label>
                <select class="form-select" id="profession" aria-label="Select your gender">
                    <option value="house wife">House Wife</option>
                    <option value="house husband">House Husband</option>
                    <option value="doctor">Doctor</option>
                    <option value="entrepreneur">Entrepeneur</option>
                    <option value="engineer">Engineer</option>
                    <option value="student">Student</option>
                    <option value="developer">Developer</option>
                    <option value="chef">Chef</option>
                    <option value="public figure">Public Figure</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" aria-label="country">
                    <option value="malaysia">Malaysia</option>
                    <option value="indonesia">Indonesia</option>
                    <option value="singapore">Singapore</option>
                    <option value="thailand">Thailand</option>
                </select>
            </div>

            <div class="d-grid gap-2 pt-5">
                <button class="btn btn-danger" type="button">Register</button>
                <a href="/sign-in" class="btn btn-outline-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection

@section('script')
@endsection

@section('js_dependencies')
@endsection
