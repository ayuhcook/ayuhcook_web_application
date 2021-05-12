@extends('index')

@section('title')
    <title>Ayuh Cook - Create Recipe</title>
@endsection

@section('css_dependencies')
@endsection

@section('content')
    <div class="container-content">
        <h2 class="text-danger fw-bold text-center p-4">Create Recipe</h2>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header collapsed" id="headingOne">
                    <button class="accordion-button text-body bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Step 1: Recipe Name
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Recipe Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Ikan Masak Merah" >
                            </div>
                            <div class="mb-3">
                                <label for="prep_time" class="form-label">Serving Time</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="30" aria-label="Preparation Time" aria-describedby="prep_time">
                                    <span class="input-group-text" id="prep_time">Minutes</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="servings" class="form-label">Estimate Servings</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="3" aria-label="Servings" aria-describedby="servings">
                                    <span class="input-group-text" id="servings">Servings</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">Cooking Difficulties</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected value="1">Begineer Level</option>
                                    <option value="2">Intermidiate Level</option>
                                    <option value="3">Hard Level</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="file_input" class="form-label">Preview Image One</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="file_input_2" class="form-label">Preview Image Two</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="file_input_3" class="form-label">Preview Image Three</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile03">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile03">
                                </div>
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
                        This is your form
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
