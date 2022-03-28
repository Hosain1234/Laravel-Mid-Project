
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand text-success fw-bold" href="#">SHIKHTE CHAI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cources
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#course-1">Cource 1</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#course-2">Cource 2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#course-3">Cource 3</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#course-4">Cource 4</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#course-5">Cource 5</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#course-6">Cource 6</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="{{ route('registration') }}">Signup</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
              