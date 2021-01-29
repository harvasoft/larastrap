<div>
    <nav class="navbar navbar-expand-md navbar-light shadow-sm bg-white mb-4 navbar-custom">
        <div class="container py-0">
            <a class="navbar-brand kotak-logo" href="{{ url('/') }}">
                <h1 class="">{{ $site }}</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    @foreach ($dataKategori as $kategori)
                    <li class="nav-item active">
                        <a class="nav-link active" href="{{ $kategori['slug'] }}">{{ $kategori['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2 form-control-sm rounded-pill border-0 bg-light" type="text"
                        placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
</div>
