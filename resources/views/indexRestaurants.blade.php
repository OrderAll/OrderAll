<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="row">
                    @foreach($restaurants as $restaurant)

                            <div class="col-12 col-lg-3 mx-5 d-flex justify-content-center align-items-center">
                                <div class="card my-2" style="width: 18rem;">
                                    <div class="card-body">
                                    <h5 class="card-title">{{$restaurant->name}}</h5>
                                    <p class="card-text">{{$restaurant->description}}</p>
                                    <p class="card-text">{{$restaurant->price}}</p>
                                    <a href="#" class="btn btn-primary">Vedi Menù</a>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-layout>