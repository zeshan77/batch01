<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4">
    <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
    <div class="" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="/home">{{ __('nav.home') }}</a>
            <a class="nav-item nav-link" href="/contact">{{ __('nav.contact') }}</a>
            <a class="nav-item nav-link" href="/batches">{{ __('nav.batches') }}</a>
            <a class="nav-item nav-link" href="/students">{{ __('nav.students') }}</a>
            <a class="nav-item nav-link" href="/groups">{{ __('nav.groups') }}</a>
        </div>
    </div>

    <!-- Example single danger button -->
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Switch language
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/locales/en">English</a></li>
            <li><a class="dropdown-item" href="/locales/nl">Dutch</a></li>
        </ul>
    </div>

</nav>