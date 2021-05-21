@extends('index')

@section('title')
    <title>Ayuh Cook - Edit Recipe</title>
@endsection

@section('css_dependencies')
@endsection

@section('content')
    <div class="container-content">
        <h2 class="text-danger fw-bold text-center p-4">Edit Recipe</h2>
        <div class="accordion" id="accordionExample">
            <!-- this goes the first step -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Step 1: Recipe Name
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="" autocomplete="off">
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
                                <div id="level">
                                    <input type="radio" class="btn-check" name="level" id="begineer" autocomplete="off" required>
                                    <label class="btn btn-outline-success" for="begineer">Begineer Level</label>
                                    <input type="radio" class="btn-check" name="level" id="intermediate" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="intermediate">Intermediate Level</label>
                                    <input type="radio" class="btn-check" name="level" id="expert" autocomplete="off">
                                    <label class="btn btn-outline-warning" for="expert">Expert Level</label>
                                </div>
                            </div>
                            <div class="mb-3 text-center mx-auto">
                                <p class="text-danger">Images Preview</p>
                                <p>
                                    <img src="/preview_1.jpg" class="img-thumbnail" width="100px" height="auto" alt="">
                                    <img src="/preview_1.jpg" class="img-thumbnail" width="100px" height="auto" alt="">
                                    <img src="/preview_1.jpg" class="img-thumbnail" width="100px" height="auto" alt="">
                                </p>
                            </div>
                            <div class="mb-3">
                                <label for="file_input" class="form-label">Preview Image One (Required)</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="file_input_2" class="form-label">Preview Image Two (Optional)</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="file_input_3" class="form-label">Preview Image Three (Optional)</label>
                                <div id="file_input" class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile03">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile03">
                                </div>
                            </div>

                            <div class="d-grid gap-2 pt-3">
                                <button class="btn btn-danger">Save & Go To Next Step</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- this goes the 2nd step -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Step 2: Ingredients
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- preview of ingredient -->
                        <div>
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Ingredient</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <form action="">
                                        <td>1</td>
                                        <td>25g Breadcrumbs</td>
                                        <input type="hidden" name="id" value="">
                                        <td><button class="btn btn-outline-danger btn-sm">Delete</button></td>
                                    </form>
                                </tr>
                            </table>
                        </div>

                        <!-- add cooking step -->
                        <div>
                            <form action="" autocomplete="off">
                                <div class="mb-3">
                                    <label for="ingredient" class="form-label">Ingredient</label>
                                    <input type="text" class="form-control" id="ingredient" placeholder="Cake Flour">
                                </div>
                                <div class="d-grid gap-2 pt-3">
                                    <button class="btn btn-outline-danger" type="button">Add Ingredient</button>
                                </div>
                            </form>
                        </div>

                        <!-- redirect info to next step -->
                        <div>
                            <form action="">
                                <div class="d-grid gap-2 pt-3">
                                    <hr>
                                    <button class="btn btn-danger" type="button">Save & Go To Next Step</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- this goes the 3rd step -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Step 3: Cooking Steps
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- preview of cooking step -->
                        <div>
                            <table class="table">
                                <tr>
                                    <th>Step</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <form action="">
                                        <td>1</td>
                                        <td>Preheat your oven at 190'c for 15 minutes</td>
                                        <input type="hidden" name="id" value="">
                                        <td><button class="btn btn-outline-danger btn-sm">Delete</button></td>
                                    </form>
                                </tr>
                            </table>
                        </div>

                        <!-- add cooking step -->
                        <div>
                            <form action="" autocomplete="off">
                                <div class="mb-3">
                                    <label for="step" class="form-label">Step</label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="file_input" class="form-label">Step Image One (Optional)</label>
                                    <div id="file_input" class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="file_input_2" class="form-label">Step Image Two (Optional)</label>
                                    <div id="file_input" class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="file_input_3" class="form-label">Step Image Three (Optional)</label>
                                    <div id="file_input" class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile03">Upload</label>
                                        <input type="file" class="form-control" id="inputGroupFile03">
                                    </div>
                                </div>

                                <div class="d-grid gap-2 pt-3">
                                    <button class="btn btn-outline-danger" type="button">Add Step</button>
                                </div>
                            </form>
                        </div>

                        <!-- redirect info to next step -->
                        <div>
                            <form action="">
                                <div class="d-grid gap-2 pt-3">
                                    <hr>
                                    <button class="btn btn-danger" type="button">Save & Go To Next Step</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 pt-4">
            <button class="btn btn-danger" type="button">Publish the recipe</button>
        </div>
    </div>
@endsection

@section('script')
@endsection

@section('js_dependencies')
@endsection
