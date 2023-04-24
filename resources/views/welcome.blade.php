<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 vh-100 navCategoryContainerCustom">
              <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                      <h1>OrderAll</h1>

                    </div>

                <div class="col-12 d-flex justify-content-center align-items-center my-2">
                  @auth
                  @if(empty(Auth::user()->is_restAdmin))
                    <a class="nav-link" href="{{route('becomeRestAdmin')}}">Lavora con Noi</a>
                    
                  @else
                      @if($restaurant->user_id == Auth::user()->id)
                    <a class="nav-link " aria-current="page" href="{{route('restaurant.index', compact('restaurant'))}}">Profilo Ristorante</a>

                    @endif

                  @endif
                  @endauth
                </div>

                <div class="col-12 d-flex justify-content-center align-items-center my-2">                    
                  <a class="nav-link " href="{{route('indexRestaurants',compact('restaurants'))}}">Ristoranti</a>
                </div>
              </div>




              
            </div>
        </div>
    </div>
</x-layout>