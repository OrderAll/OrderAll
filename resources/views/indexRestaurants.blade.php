<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 navCategoryContainerCustom">

                <div class="row">
                    @foreach($restaurants as $restaurant)

                            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center">
                                <div class="card my-2  d-flex justify-content-center align-items-center text-center" style="width: 10rem;">
                                    <div class="card-body">


                                    <h5 class="card-title">{{$restaurant->name}}</h5>
                                    <p class="card-text">{{$restaurant->description}}</p>
                                    <p class="card-text">{{$restaurant->price}}</p>
                                    <p><a href="{{route('menu', compact('restaurant'))}}">Menù</a></p>

                                    <p><a href="{{route('allTables', compact('restaurant'))}}">Vai ai tavoli</a></p>

                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-layout>