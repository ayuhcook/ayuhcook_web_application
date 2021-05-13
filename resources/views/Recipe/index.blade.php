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

                @include('Recipe.Components.showRecipeList')

            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection

@section('js_dependencies')
@endsection
