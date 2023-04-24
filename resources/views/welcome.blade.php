<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 vh-100 navCategoryContainerCustom">
              <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                      <h1>OrderAll</h1>

                    </div>

  
              </div>




              
            </div>
        </div>
    </div>
          <div class="row">
              <div class="col-12 navCategoryContainerCustom">
  
                  <div class="row">
                      @foreach($restaurants as $restaurant)
  
                              <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center">
                                  <div class="card my-2  d-flex justify-content-center align-items-center text-center" style="width: 10rem;">
                                      <div class="card-body">
  
  
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
</x-layout>