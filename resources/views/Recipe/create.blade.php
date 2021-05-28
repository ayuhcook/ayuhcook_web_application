@extends('index')

@section('title')
    <title>Ayuh Cook - Create Recipe</title>
@endsection

@section('css_dependencies')
    <style>
        .alert-container {
            max-width: 600px;
        }
    </style>
@endsection

@section('content')
    <div class="container-content">
        <!-- toast function -->
        @if(session('message'))
            <div class="fixed-bottom alert-container ms-auto">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="fixed-bottom alert-container ms-auto">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- main form -->
        <h2 class="text-danger fw-bold text-center p-4">Create Recipe</h2>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button text-danger bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Step 1: Recipe Name
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="/recipe/create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Recipe Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ikan Masak Merah" required>
                            </div>
                            <div class="mb-3">
                                <label for="prep_time" class="form-label">Preparation Time</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="preparation_time" class="form-control" placeholder="30" aria-label="Preparation Time" aria-describedby="prep_time" required> <span class="input-group-text" id="prep_time">Minutes</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="servings" class="form-label">Estimate Servings</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="servings" class="form-control" placeholder="3" aria-label="Servings" aria-describedby="servings" required>
                                    <span class="input-group-text" id="servings">Servings</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <div class="input-group mb-3">
                                    <textarea name="description" class="form-control" id="description" required></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Cooking Difficulties</label>
                                <div id="level">
                                    <input type="radio" class="btn-check" name="level" id="begineer" value="Easy" autocomplete="off" required>
                                    <label class="btn btn-outline-success" for="begineer">Begineer Level</label>
                                    <input type="radio" class="btn-check" name="level" id="intermediate" value="Intermediate" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="intermediate">Intermediate Level</label>
                                    <input type="radio" class="btn-check" name="level" value="Expert" id="expert" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="expert">Expert Level</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Category</label>
                                <select class="form-select" name="category" aria-label="Default select example" required>
                                    <option value="main-dish">Main Dish</option>
                                    <option value="drink-and-beverage">Drink & Beverage</option>
                                    <option value="dessert">Dessert</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="file_input" class="form-label">Preview Image One</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" name="image_1" id="inputGroupFile01" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="file_input_2" class="form-label">Preview Image Two</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    <input type="file" class="form-control" name="image_2" id="inputGroupFile02">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="file_input_3" class="form-label">Preview Image Three</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile03">Upload</label>
                                    <input type="file" class="form-control" name="image_3" id="inputGroupFile03">
                                </div>
                            </div>

                            <div class="d-grid gap-2 pt-5">
                                <button class="btn btn-danger">Save & Go To Next Step</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-light text-muted" disabled type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Step 2: Ingredients
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-light text-muted" disabled type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Step 3: Cooking Steps
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
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
