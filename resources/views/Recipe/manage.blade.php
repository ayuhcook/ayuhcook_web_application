@extends('index')

@section('title')
    <title>Ayuh Cook - Recipe Repositories</title>
@endsection

@section('css_dependencies')
@endsection

@section('content')
    <div class="container-content">
        <h2 class="text-danger fw-bold text-center p-4">My Recipe Repositories</h2>

        <!-- recipes list -->
        <div class="py-4">
            <div class="py-2">
                <p class="text-muted text-danger fst-italic">Ordered By Alphabet</p>
                <a href="/recipe/create" class="btn btn-danger">Create Recipe</a>

                <hr>
                <div class="p-3">
                    <div class="row">
                        <div class="col-9">
                            <h5 class="fw-bold text-danger">Ikan Siakap Lemak Cili Padi</h5>
                            <p><i class="far fa-clock"></i> 10 minutes | <i class="fas fa-user-ninja"></i> Intermediate | <i class="fas fa-glass-cheers"></i> 10 Servings</p>
                            <p>
                                This is the description of the recipes <br>
                                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                            </p>
                            <!-- for web view -->
                            <div class="d-none d-sm-none d-md-none d-lg-block">
                                <a href="/recipes/123" class="btn btn-danger">View Recipe</a>
                                <a href="/recipes/123/edit" class="btn btn-outline-danger">Edit Recipe</a>
                                <button class="btn btn-outline-danger">Spread Your Love</button>
                            </div>

                            <!-- for mobile view -->
                            <div class="d-block d-sm-block d-md-block d-lg-none">
                                <a href="/recipes/123" class="btn btn-danger">View</a>
                                <a href="/recipes/123/edit" class="btn btn-outline-danger">Edit</a>
                                <button class="btn btn-outline-danger">Share</button>
                            </div>
                        </div>
                        <div class="col-3">
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
