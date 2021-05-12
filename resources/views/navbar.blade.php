<nav class="navbar navbar-expand-lg shadow sticky-top navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-danger" href="/">Ayuh Cook</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/recipes">Recipe Repository</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/category">Category</a>
                </li>

                @if (Auth::guest())
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Engku Nazri
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-danger fw-bold" href="/recipe/create">Create Recipe</a></li>
                        <li><a class="dropdown-item" href="/profile/123">My Profile</a></li>
                        <li><a class="dropdown-item" href="/my-recipe-repository">My Recipe Repository</a></li>
                        <li><a class="dropdown-item" href="#">My Bookmark</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign Out</a></li>
                    </ul>
                    </li>
                @else
                <li class="nav-item">
                    <a class="nav-link active" href="/sign-in">Sign In</a>
                </li>
                @endif

            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Ikan Siakap Berlada" aria-label="Search">
                <button class="btn btn-danger" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
