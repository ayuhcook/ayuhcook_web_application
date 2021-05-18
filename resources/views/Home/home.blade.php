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
            <a href="/recipe/create" class="btn btn-danger">Contribute your Recipe</a>
        </div>
        <div class="p-1">
            <a href="/register" class="btn btn-outline-danger">Join The Community Now to Spread Your Love</a>
        </div>
    </div>

    <div class="container-content">
        <!-- TOP 8 RECIPES THIS WEEK -->
        <div class="pt-4 pb-4">
            <h5 class="text-danger text-center">Trending Recipes This Week</h5>
        </div>
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3 pb-5">
                <div class="card mx-auto" style="width: 100%;">
                    <img src="/Category/main_dish.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ikan Masak Lemak Cili Padi</h5>
                        <a href="/profile/1" class="text-decoration-none">
                            <h6 class="card-subtitle mb-2 text-muted">By Engku Nazri</h6>
                        </a>
                        <p class="card-text d-none d-sm-block">
                            <i class="fas fa-utensils"></i> 10 Minutes <br>
                            <i class="fas fa-user-ninja"></i> Intermediate <br>
                            <i class="fas fa-glass-cheers"></i> 2 Servings
                        </p>
                        <div class="pt-4">
                            <a href="/recipes/123" class="btn btn-danger">Learn Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CHECK OUT NEW RECEIPES -->
        <div class="pt-4 pb-4">
            <h5 class="text-danger text-center">Prepare Your Pan & Spatula for New Recipes</h5>
        </div>
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3 pb-5">
                <div class="card mx-auto" style="width: 100%;">
                    <img src="/Category/main_dish.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ikan Masak Lemak Cili Padi</h5>
                        <a href="/profile/1" class="text-decoration-none">
                            <h6 class="card-subtitle mb-2 text-muted">By Engku Nazri</h6>
                        </a>
                        <p class="card-text d-none d-sm-block">
                            <i class="fas fa-utensils"></i> 10 Minutes <br>
                            <i class="fas fa-user-ninja"></i> Intermediate <br>
                            <i class="fas fa-glass-cheers"></i> 2 Servings
                        </p>
                        <div class="pt-4">
                            <a href="/recipes/123" class="btn btn-danger">Learn Recipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection

@section('js_dependencies')
@endsection
