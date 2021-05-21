@extends('index')

@section('title')
    <title>Ayuh Cook - Profile - {{ $user->f_name }}</title>
@endsection

@section('css_dependencies')
    <style>
        .description-container {
            max-width: 500px;
        }
    </style>
@endsection

@section('content')
    <div class="container-content">
        <!-- User information -->
        <div class="text-center">
            @if ($user->profile_image)
                <div class="bg-danger rounded py-5">
                    <img src="/storage/{{ $user->profile_image }}" class="img-thumbnail" width="200" alt="">
                </div>
            @else
                <div class="bg-danger rounded py-5">
                    <img src="/no-profile-image.png" class="img-thumbnail" width="200" alt="">
                </div>
            @endif
            <h2 class="text-danger fw-bold p-4">{{ $user->f_name.' '.$user->l_name }}</h2>
            <p><i class="fas fa-map-marker-alt"></i> {{ $user->country }} | <i class="fas fa-utensils"></i> {{ $contribution_count }} Contributions</p>
            <p class="description-container mx-auto">
                {!! $user->description !!}
            </p>
        </div>

        <!-- profile configuration for owner only -->
        @if (Auth::user()->id == $user->id)
            <div class="mx-auto text-center">
                <a href="/my-recipe-repository" class="btn btn-danger">Manage Repository</a>
                <a href="/profile/{{ $user->id }}/edit" class="btn btn-outline-danger">Edit Profile</a>
            </div>
        @endif

        <!-- User Contribution Recipe -->
        @if ($recipes == null)
            <div class="pt-5">
                <div class="">
                    <h4 class="text-danger fw-bold py-4">Recipe Repository By Engku Nazri</h4>
                </div>

                @foreach ($recipes as $item)
                    <div class="p-3">
                        <div class="row">
                            <hr>
                            <div class="col-8">
                                <a href="/profile/123" class="text-decoration-none"><p class="text-muted">By Engku Nazri</p></a>
                                <h5 class="fw-bold text-danger">{{ $item->name }}</h5>
                                <p><i class="far fa-clock"></i> {{ $item->preparation_time }} minutes | <i class="fas fa-user-ninja"></i> {{ $item->level }} | <i class="fas fa-glass-cheers"></i> {{ $item->servings }} People</p>
                                <p>
                                    {{ $item->description }}
                                </p>
                                <div class="footer-recipe">
                                    <a href="/recipes/{{ $item->id }}" class="btn btn-danger">Learn Recipe</a>
                                    <a href="" class="btn btn-outline-danger"><i class="fas fa-star"></i></a>
                                    <a href="" class="btn btn-outline-danger"><i class="fas fa-bookmark"></i></a>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="/Category/main_dish.jpg" class="rounded" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

@endsection

@section('script')
@endsection

@section('js_dependencies')
@endsection
