<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="/mystore">Mystore</a> --}}
        <a class="navbar-brand" href="/mystore"><img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">Mystore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/mystore">Home</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        Catalog
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/medicine">Medicine</a></li>
                        <li><a class="dropdown-item" href="/equipment">Equipment</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/greeting">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>