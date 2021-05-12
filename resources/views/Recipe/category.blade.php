@extends('index')

@section('title')
    <title>Ayuh Cook - Homepage</title>
@endsection

@section('css_dependencies')
@endsection

@section('content')
    <div class="container-content">
        <h2 class="text-danger fw-bold text-center p-4">Category</h2>

        <!-- Food -->
        <div class="py-4" id="food-and-appetizers">
            <h3 class="text-danger">Foods & Appetizers</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3 pb-5">
                <a href="/category/main-dish" class="text-decoration-none text-body mx-auto">
                    <div class="card mx-auto shadow" style="width: 100%;">
                        <img src="/Category/main_dish.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Main Dish</h5>
                            <p class="card-text">Main dish for your meals</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Drinks -->
        <div class="py-4" id="drinks-and-beverage">
            <h3 class="text-danger">Drinks & Beverage</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3 pb-5">
                <a href="/category/main-dish" class="text-decoration-none text-body mx-auto hover-effect">
                    <div class="card mx-auto shadow" style="width: 100%;">
                        <img src="/Category/main_dish.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Main Dish</h5>
                            <p class="card-text">Main dish for your meals</p>
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
