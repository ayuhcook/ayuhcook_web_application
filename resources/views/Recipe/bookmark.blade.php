@extends('index')

@section('title')
    <title>Ayuh Cook - My Bookmark</title>
@endsection

@section('css_dependencies')
@endsection

@section('content')
    <div class="container-content">
        <h2 class="text-danger fw-bold text-center p-4">My Bookmark</h2>

        <!-- recipes list -->
        <div class="py-4">
            <div class="py-2">
                <p class="text-muted text-danger fst-italic">Ordered By Alphabet</p>
                <a href="/recipe/create" class="btn btn-danger">Create Recipe</a>

                @include('Recipe.Components.showRecipeList')

            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection

@section('js_dependencies')
@endsection
