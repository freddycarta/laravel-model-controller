{{-- <header class="bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('products')}}">Products</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog')}}">Blog</a>
              </li>
          </ul>
          
        </div>
      </nav>
</header> --}}

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo">
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-3 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">CHARACTERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::currentRouteName() == 'single' ? 'active' : ''
          }}" href="{{ route('single') }}">
              COMICS
          </a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="#">MOVIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">GAMES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">VIDEO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FANS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SHOP</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <div class="input-group">
        <div class="form-outline">
          <input type="search" id="form1" class="form-control" />
          <label class="form-label" for="form1">Search</label>
        </div>
        
      </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<div>
  <img class="img-responsive" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="Logo">
</div>
