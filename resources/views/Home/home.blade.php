@extends('index')

@section('title')
    <title>Ayuh Cook - Homepage</title>
@endsection

@section('css_dependencies')
@endsection

@section('content')
    <div class="p-5 text-center bg-light">
        <h1 class="text-center">Hello to Ayuh Cook</h1>
        <div class="p-1">
            <a href="/recipes/create" class="btn btn-danger">Contribute your Recipe</a>
        </div>
        <div class="p-1">
            <a href="/sign-up" class="btn btn-outline-danger">Register as Recipes' Contributor</a>
        </div>
    </div>

    <div class="container-content">
        <!-- TOP 8 RECIPES THIS WEEK -->
        <div class="pt-4 pb-4">
            <h5 class="text-danger text-center">Trending Recipes This Week</h5>
        </div>
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3 pb-5">
                <a href="#" class="text-decoration-none text-body mx-auto">
                    <div class="card mx-auto" style="width: 100%;">
                        <img src="/Category/main_dish.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ikan Masak Lemak Cili Padi</h5>
                            <h6 class="card-subtitle mb-2 text-muted">By Engku Nazri</h6>
                            <p class="card-text">
                                <i class="fas fa-utensils"></i> 10 Minutes <br>
                                <i class="fas fa-user-ninja"></i> Intermediate <br>
                                <i class="fas fa-glass-cheers"></i> 2 Servings
                            </p>
                            <button class="btn btn-danger mr-auto">Learn Recipe</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- CHECK OUT NEW RECEIPES -->
        <div class="pt-4 pb-4">
            <h5 class="text-danger text-center">Prepare Your Pan & Spatula for New Recipes</h5>
        </div>
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3 pb-5">
                <a href="#" class="text-decoration-none text-body mx-auto">
                    <div class="card mx-auto" style="width: 100%;">
                        <img src="/Category/main_dish.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ikan Masak Lemak Cili Padi</h5>
                            <h6 class="card-subtitle mb-2 text-muted">By Engku Nazri</h6>
                            <p class="card-text">
                                <i class="fas fa-utensils"></i> 10 Minutes <br>
                                <i class="fas fa-user-ninja"></i> Intermediate <br>
                                <i class="fas fa-glass-cheers"></i> 2 Servings
                            </p>
                            <button class="btn btn-danger mr-auto">Learn Recipe</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection

@section('js_dependencies')
@endsection
