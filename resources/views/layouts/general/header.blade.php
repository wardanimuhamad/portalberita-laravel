<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!--<a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> -->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Artikel <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kontributor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Penyuntingan</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="{{ url('login') }}" class="btn btn btn-primary my-2 my-sm-0">Login</a>
        </form>
    </div>
</nav>
