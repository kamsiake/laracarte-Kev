<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="{{route('Home')}}">Laracarte</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('Home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('about')}}">about</a>
        </li>
        <li class="nav-item active">
                <a class="nav-link" href="#">artisan</a>
              </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            planet
          </a>
          
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="//laravel.com">laravel.com</a>
            <a class="dropdown-item" href="//laravel.io">laravel.io</a>
            <a class="dropdown-item" href="//laracasts.com">laracasts</a>
            <a class="dropdown-item" href="//larajobs.com">larajobs</a>
            <a class="dropdown-item" href="//laravel-naws.com">laravel News</a>
            <a class="dropdown-item" href="//larachat.com">larachat</a>
          </div>
        </li>
        <li class="nav-item active">
                <a class="nav-link" href="#">contact</a>
              </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">
         <a class="nav-link " href="#" >login</a>
         <a class="nav-link " href="#">register</a>  
      </div>
    </div>
  </nav>