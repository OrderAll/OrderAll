<x-layout>

  <section class="hero-section bg-image"  >
    <div class="section-overlay"></div>

    <div class="container d-flex justify-content-center align-items-center " >
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                <small>Ordina dal tuo ristorante preferito con un click.</small>

                <h1 class="text-white mb-5">Orderall</h1>
                @guest
                <a class="btn custom-btn smoothscroll" href="{{route('login')}}">Login</a>
                @endguest
            </div>

            <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">

                <div class="location-wrap mx-auto py-3 py-lg-0">
                    <h5 class="text-white">
                        <i class="custom-icon bi-geo-alt me-2"></i>
                        Pavia, PV, Italy
                    </h5>
                </div>

                <div class="social-share">
                    <ul class="social-icon d-flex align-items-center justify-content-center">
                        <span class="text-white me-3">Share:</span>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                              <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                              <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                              <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="container-fluid p-5 ">
          <div class="row">
              <div class="col-12 mb-5">
  
                  <div class="row">
                                <div class="col-12 text-center my-5">
                                    <h2>I nostri Ristoranti Partner</h2>
                                </div>
                      @foreach($restaurants as $restaurant)
  
                              <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center">
                                  <div class="col my-2  d-flex justify-content-center align-items-center text-center shadow" style="width: 20rem;height: 20rem;">
                                      <div class="card-bod text-center">
  
  
                                      <h5 class="card-title">{{$restaurant->name}}</h5>
                                      <p class="card-text">{{$restaurant->description}}</p>
                                      <p class="card-text">{{$restaurant->map}}</p>
                                      <p><a href="{{route('menu', compact('restaurant'))}}">Menù</a></p>
                                      @if(empty($user->table_id))
                                      <p><a href="{{route('allTables', compact('restaurant'))}}">Vai ai tavoli</a></p>
                                      @endif
  
                                      </div>
                                  </div>
                              </div>
                      @endforeach
                  </div>
  
              </div>
          </div>
        </div>
</x-layout>