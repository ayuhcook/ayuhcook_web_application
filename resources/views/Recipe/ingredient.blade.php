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
                    <button class="accordion-button collapsed text-body bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Step 1: Recipe Name
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Recipe Name</label>
                                <input type="text" class="form-control" id="name" value="{{ $recipe->name }}" placeholder="Ikan Masak Merah" >
                            </div>
                            <div class="mb-3">
                                <label for="prep_time" class="form-label">Serving Time</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="{{ $recipe->preparation_time }}" placeholder="30" aria-label="Preparation Time" aria-describedby="prep_time">
                                    <span class="input-group-text" id="prep_time">Minutes</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="servings" class="form-label">Estimate Servings</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="{{ $recipe->servings }}" placeholder="3" aria-label="Servings" aria-describedby="servings">
                                    <span class="input-group-text" id="servings">Servings</span>
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
                                <label for="file_input" class="form-label">Preview Image One</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                </div>
                                <p><a target="_blank" href="/storage/{{ $recipe->image_1 }}">{{ $recipe->image_1 }}</a></p>
                            </div>
                            <div class="mb-3">
                                <label for="file_input_2" class="form-label">Preview Image Two</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                                <p><a target="_blank" href="/storage/{{ $recipe->image_2 }}">{{ $recipe->image_2 }}</a></p>
                            </div>
                            <div class="mb-3">
                                <label for="file_input_3" class="form-label">Preview Image Three</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile03">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile03">
                                </div>
                                <p><a target="_blank" href="/storage/{{ $recipe->image_3 }}">{{ $recipe->image_3 }}</a></p>
                            </div>

                            <div class="d-grid gap-2 pt-5">
                                <button class="btn btn-danger" type="button">Save & Go To Next Step</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button bg-light text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Step 2: Ingredients
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- preview of ingredient -->
                        <div>
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Ingredient</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($ingredients as $item)
                                    <tr>
                                        <form action="" method="POST">
                                            @method('DELETE')
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <input type="hidden" name="id" value="">
                                            <td><a href="/recipe/{{ $id }}/delete/ingredient/{{ $item->id }}" class="btn btn-outline-danger btn-sm">Delete</a></td>
                                        </form>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                        <!-- add cooking step -->
                        <div class="pt-2">
                            <form action="/recipe/create/{{ $id }}/ingredient" method="POST" autocomplete="off">
                                @csrf
                                <div class="mb-3">
                                    <label for="ingredient" class="form-label">Ingredient</label>
                                    <input type="text" class="form-control" name="name" id="ingredient" placeholder="Cake Flour">
                                    <input type="hidden" name="recipe_id" value="{{ $id }}">
                                </div>
                                <div class="d-grid gap-2 pt-3">
                                    <button class="btn btn-outline-danger">Add Ingredient</button>
                                </div>
                            </form>
                        </div>

                        <!-- redirect info to next step -->
                        <div>
                            <form action="">
                                <div class="d-grid gap-2 pt-3">
                                    <hr>
                                    <a href="/recipe/create/{{ $id }}/step" class="btn btn-danger" type="button">Save & Go To Next Step</a>
                                </div>
                            </form>
                        </div>
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
