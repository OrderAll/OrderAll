<x-layout>
    <div class="tornaIndietro" style="">
        <a href="http://">
            <i class="fa-solid fa-arrow-left fa-2x"></i>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>I tuoi tavoli</h1>
            </div>
            <div class="col-12 mb-5">

                <div class="row">
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