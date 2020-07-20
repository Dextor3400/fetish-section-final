<nav class="navbar mb-5 p-1 navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand d-md-none" href="/index.php">Fetish Section</a>
            <button class="ml-md-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-pills container p-0">
                    <li class="col-12 col-lg-auto my-2 text-center nav-item mx-auto">
                        <a class="text-uppercase hvr-grow nav-link {{ Request::is('home*') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="col-12 col-lg-auto my-2 text-center nav-item mx-auto">
                        <a class="text-uppercase hvr-grow nav-link {{ Request::is('news*') ? 'active' : '' }}"
                            href="{{ route('news') }}">News</a>
                    </li>
                    <li class="col-12 col-lg-auto my-2 text-center nav-item mx-auto">
                        <a class="text-uppercase hvr-grow nav-link {{ Request::is('tour*') ? 'active' : '' }}"
                            href="{{ route('tour') }}">Tour</a>
                    </li>
                    <li class="col-12 col-lg-auto my-2 text-center nav-item mx-auto">
                        <a class="text-uppercase hvr-grow nav-link {{ Request::is('media*') ? 'active' : '' }}"
                            href="{{ route('media') }}">Media</a>
                    </li>
                    <li class="col-12 col-lg-auto my-2 text-center nav-item mx-auto">
                        <a class="text-uppercase hvr-grow nav-link {{ Request::is('contact*') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
