

<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="row">
                    @foreach($dishes as $dish)

                        @if($restaurant->id == $dish->rest_id)

                            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center">
                                <div class="card my-2  d-flex justify-content-center align-items-center text-center" style="width: 10rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$dish->name}}</h5>
                                        <p class="card-text">Descrizione: {{$dish->description}}</p>
                                        <p class="card-text">{{$dish->price}} $</p>
                                        <p class="card-text">{{$dish->category->name}}</p>
                                        <a href="#" class="btn btn-primary">Aggiungi al carrello</a>

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                </div>

            </div>
        </div>
    </div>
</x-layout>