<header class="site-header">
  <div class="container">
      <div class="row">

          <div class="col-12 d-flex justify-content-center">
              <p class="d-flex me-4 mb-0 text-center">
                  <i class="bi-person custom-icon me-2"></i>
                  <strong class="text-dark">Benvenuto sulla demo di OrderAll!</strong>
              </p>
          </div>

      </div>
  </div>
</header>


<nav class="navbar navbar-expand-lg">
  <div class="container">
      <a class="navbar-brand" href="{{route('homePage')}}">
          OrderAll
      </a>

      @auth
        @if(Auth::user()->table_id)
          <a  href="{{route('showTable')}}" class="btn custom-btn d-lg-none ms-auto me-4">Tavolo</a>
        @endif
      @endauth

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">

            <li class="nav-item">
              <a class="nav-link " href="{{route('indexRestaurants')}}">Ristoranti</a>
            </li>
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
              </li>
      
              <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Registrati</a>
              </li>
            @else
              @if(empty(Auth::user()->is_restAdmin))
                <li class="nav-item">
                  <a class="nav-link" href="{{route('becomeRestAdmin')}}">Lavora con Noi</a>
                </li>
              @elseif($restaurant->user_id == Auth::user()->id)
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="{{route('restaurant.index')}}">Profilo Ristorante</a>
                </li>
              @else
                  <p>ERRORE</p>
              @endif
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="event.preventDefault();
                  document.querySelector('#form-logout').submit();">Logout</a></li>
                  <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
              </li>
            @endguest
          

          </ul>

          @auth
            @if(Auth::user()->table_id)
              <a  href="{{route('showTable')}}" class="btn custom-btn d-lg-block d-none">Tavolo</a>
            @endif
          @endauth
      </div>
  </div>
</nav>


