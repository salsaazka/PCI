<nav class="navbar sticky-top navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid d-flex justify-content-between">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img class="brand-image" src="{{ asset('assets/images/logo.png') }}" alt="logo" />
        </a>

        <!-- Toggler button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'landing' ? ' nav-active' : '' }}"
                        id="nav-home" aria-current="page" href="{{ route('landing') }}">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Route::currentRouteName() === 'list-product' || Route::currentRouteName() === 'detail-product' ? ' nav-active' : '' }}"
                        href="#" data-bs-toggle="dropdown" aria-expanded="false">PRODUCTS</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('list-product') }}">ZEOLITES-BASED</a></li>
                        <li><a class="dropdown-item" href="{{ route('list-product2') }}">EXPORT COMMODITIES</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'product-knowledge-page' || Route::currentRouteName() === 'detail-product-knowledge' ? ' nav-active' : '' }}"
                        id="nav-product" href="{{ route('product-knowledge-page') }}">PRODUCT KNOWLEDGE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'contact-page' || Route::currentRouteName() === 'detail-product-knowledge' ? ' nav-active' : '' }}"
                        id="nav-product" href="{{ route('contact-page') }}">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'contact-page' || Route::currentRouteName() === 'detail-product-knowledge' ? ' nav-active' : '' }}"
                        id="nav-product" href="{{ route('signIn') }}">SIGN IN</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">LANG</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="locale/en">En</a></li>
                        <li><a class="dropdown-item" href="locale/id">Id</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
