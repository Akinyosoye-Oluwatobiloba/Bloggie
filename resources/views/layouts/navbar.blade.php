    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><h2>Tobi <em>Blog</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url("/") }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/blog") }}">Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/blogs/create") }}">Create A new Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/about") }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/contact") }}">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
@yield('content')
