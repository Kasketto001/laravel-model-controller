<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="">Movies Database</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link " href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'guests.movies' ? 'active' : ''}}" href="{{route('guests.movies')}}" href="#">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
            <form class="d-flex gap-2 my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      
</header>