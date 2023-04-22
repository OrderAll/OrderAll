<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 vh-100 ">
              <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                      <h1>OrderAll</h1>

                    </div>

                <div class="col-12 d-flex justify-content-center align-items-center my-2">
                  @auth
                  @if(!Auth::user()->is_restAdmin)
                    <a class="nav-link" href="{{route('becomeRestAdmin')}}">Lavora con Noi</a>
                  @else
                    <a class="nav-link " aria-current="page" href="{{route('restaurant.index', compact('restaurant'))}}">Profilo Ristorante</a>
                  @endif
                  @endauth
                </div>

                <div class="col-12 d-flex justify-content-center align-items-center my-2">                    
                  <a class="nav-link " href="{{route('indexRestaurants')}}">Ristoranti</a>
                </div>
              </div>




              
            </div>
        </div>
    </div>
</x-layout>