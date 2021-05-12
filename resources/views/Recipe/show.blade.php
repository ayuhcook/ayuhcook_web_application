@extends('index')

@section('title')
    <title>Ayuh Cook - Ikan Siakap Berlada</title>
@endsection

@section('css_dependencies')
    <style>
        .receipe-container {
            max-width: 500px;
        }

        .step-image {
            max-width: 150px;
            padding: 10px;
        }

        .container-carousel {
            position: relative;
        }

        .container-carousel-button {
            position: absolute;
            z-index: 2;
            padding: 10px;
        }

    </style>
@endsection

@section('content')
    <div class="container-content receipe-container">
        <!-- title and preview -->
        <div>
            <h2 class="text-danger fw-bold text-center p-4">Ikan Siakap Berlada</h2>
        </div>
        <div class="container-carousel">
            <div class="container-carousel-button">
                <button class="btn btn-outline-danger"><i class="fas fa-star"></i></button>
                <button class="btn btn-outline-danger"><i class="fas fa-bookmark"></i></button>
            </div>
            <div id="carouselRecipe" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselRecipe" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselRecipe" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselRecipe" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="/preview_1.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/preview_2.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/preview_3.jpg" class="d-block w-100 rounded" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselRecipe" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselRecipe" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Rating and Bookmark -->
        <div class="pt-2">
            <p class="fw-bold">
                300 Stars <i class="fas fa-star"></i> <br>
                Bookmark by 25 People <i class="fas fa-bookmark"></i>
            </p>
        </div>

        <!-- recipe description -->
        <div class="py-4">
            <h5 class="text-danger">Descriptions</h5>
            <p>This is the description of the recipe</p>
            <p>
                <i class="fas fa-utensils"></i> 10 Minutes <br>
                <i class="fas fa-user-ninja"></i> Intermediate <br>
                <i class="fas fa-glass-cheers"></i> 2 Servings
            </p>
        </div>

        <!-- ingredient -->
        <div>
            <h5 class="text-danger">Ingredients</h5>
            <ul>
                <li>Bread Crum - 1 pcs/pack</li>
                <li>Burger Bread - 1 pcs/pack</li>
                <li>Salad - 1 pcs/pack</li>
                <li>Onion - 1 pcs/pack</li>
                <li>Chili Sauce - 1 pcs/pack</li>
                <li>Cheese  - 40 kg</li>
            </ul>
        </div>

        <!-- steps -->
        <div>
            <h5 class="text-danger">Steps</h5>
            <div class="step-container">
                <ol>
                    <li>
                        This is the step that need to being followed
                        This is the step that need to being followed
                        This is the step that need to being followed
                        <!-- web view -->
                        <div class="d-none d-sm-block">
                            <div class="d-flex flex-row justify-content-evenly">
                                <img src="/preview_1.jpg" class="rounded step-image" alt="">
                                <img src="/preview_1.jpg" class="rounded step-image" alt="">
                                <img src="/preview_1.jpg" class="rounded step-image" alt="">
                            </div>
                        </div>
                        <!-- mobile view -->
                        <div class="d-block d-sm-none">
                            <div class="d-block mx-auto text-center pt-4">
                                <img src="/preview_1.jpg" class="rounded p-1" width="200px" alt="">
                                <img src="/preview_1.jpg" class="rounded p-1" width="200px" alt="">
                                <img src="/preview_1.jpg" class="rounded p-1" width="200px" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        This is the step that need to being followed
                        This is the step that need to being followed
                        This is the step that need to being followed
                        <!-- web view -->
                        <div class="d-none d-sm-block">
                            <div class="d-flex flex-row justify-content-evenly">
                                <img src="/preview_1.jpg" class="rounded step-image" alt="">
                                <img src="/preview_1.jpg" class="rounded step-image" alt="">
                                <img src="/preview_1.jpg" class="rounded step-image" alt="">
                            </div>
                        </div>
                        <!-- mobile view -->
                        <div class="d-block d-sm-none">
                            <div class="d-block mx-auto text-center pt-4">
                                <img src="/preview_1.jpg" class="rounded p-1" width="200px" alt="">
                                <img src="/preview_1.jpg" class="rounded p-1" width="200px" alt="">
                                <img src="/preview_1.jpg" class="rounded p-1" width="200px" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        This is the step that need to being followed
                        This is the step that need to being followed
                        This is the step that need to being followed
                        <!-- web view -->
                        <div class="d-none d-sm-block">
                            <div class="d-flex flex-row justify-content-evenly">
                                <img src="/preview_1.jpg" class="rounded step-image" alt="">
                                <img src="/preview_1.jpg" class="rounded step-image" alt="">
                                <img src="/preview_1.jpg" class="rounded step-image" alt="">
                            </div>
                        </div>
                        <!-- mobile view -->
                        <div class="d-block d-sm-none">
                            <div class="d-block mx-auto text-center pt-4">
                                <img src="/preview_1.jpg" class="rounded p-1" width="200px" alt="">
                                <img src="/preview_1.jpg" class="rounded p-1" width="200px" alt="">
                                <img src="/preview_1.jpg" class="rounded p-1" width="200px" alt="">
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection

@section('js_dependencies')
@endsection
