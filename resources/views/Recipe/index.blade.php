@extends('index')

@section('title')
    <title>Ayuh Cook - Recipe Repositories</title>
@endsection

@section('css_dependencies')
@endsection

@section('content')
    <div class="container-content">
        <h2 class="text-danger fw-bold text-center p-4">Recipe Repositories</h2>
        <div class="d-none d-sm-none d-md-block">
            <div class="text-center">
                <a href="/category#food-and-appetizers" class="btn btn-outline-danger">Food & Apperizers</a>
                <a href="/category/#drinks-and-beverage" class="btn btn-outline-danger">Drinks & Beverage</a>
            </div>
            <div class="text-center pt-4">
                <a href="/category/" class="btn btn-outline-danger">Sort By Date (Newest)</a>
                <a href="/category/" class="btn btn-outline-danger">Sort By Date (Oldest)</a>
                <a href="/category/" class="btn btn-outline-danger">Sort By Star (More)</a>
                <a href="/category/" class="btn btn-outline-danger">Sort By Star (Less)</a>
            </div>
        </div>

        <!-- recipes list -->
        <div class="py-4">
            <div class="py-2">

                <hr>
                <div class="p-3">
                    <div class="row">
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
                                <a href="/recipes/123" class="btn btn-danger">Learn Recipe</a>
                                <a href="#" class="btn btn-outline-danger"><i class="fas fa-star"></i></a>
                                <a href="#" class="btn btn-outline-danger"><i class="fas fa-bookmark"></i></a>
                                <a href="#" class="btn btn-outline-danger"><i class="fas fa-print"></i></a>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="/Category/main_dish.jpg" class="rounded" width="100%" alt="">
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
