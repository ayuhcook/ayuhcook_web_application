@extends('index')

@section('title')
    <title>Ayuh Cook - Profile - Engku Nazri</title>
@endsection

@section('css_dependencies')
@endsection

@section('content')
    <div class="container-content">
        <!-- User information -->
        <div class="text-center">
            <div class="bg-danger rounded py-5">
                <img src="/sample_profile.jpg" class="img-thumbnail" width="200px" alt="">
            </div>
            <h2 class="text-danger fw-bold p-4">Engku Nazri Engku Nasir</h2>
            <p><i class="fas fa-map-marker-alt"></i> Malaysia | <i class="fas fa-utensils"></i> 100 Contributions</p>
            <p>
                This is your own description
            </p>
        </div>

        <!-- User Contribution Recipe -->
        <div class="pt-5">
            <div class="">
                <h4 class="text-danger fw-bold py-4">Recipe Repository By Engku Nazri</h4>
            </div>
            <div class="p-3">
                <div class="row">
                    <hr>
                    <div class="col-8">
                        <a href="/profile/123" class="text-decoration-none"><p class="text-muted">By Engku Nazri</p></a>
                        <h5 class="fw-bold text-danger">Ikan Siakap Lemak Cili Padi</h5>
                        <p><i class="far fa-clock"></i> 10 minutes | <i class="fas fa-user-ninja"></i> Intermediate | <i class="fas fa-glass-cheers"></i> 10 Servings</p>
                        <p>
                            This is the description of the recipes <br>
                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                        </p>
                        <div class="footer-recipe">
                            <button class="btn btn-danger">Learn Recipe</button>
                            <button class="btn btn-outline-danger"><i class="fas fa-star"></i></button>
                            <button class="btn btn-outline-danger"><i class="fas fa-bookmark"></i></button>
                        </div>
                    </div>
                    <div class="col-4">
                        <img src="/Category/main_dish.jpg" class="rounded" width="100%" alt="">
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
