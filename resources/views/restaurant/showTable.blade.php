<x-layout>
    <div class="tornaIndietro" style="">
        <a href="http://">
            <i class="fa-solid fa-arrow-left fa-2x"></i>
        </a>
    </div>

    <div class="container mb-5">
        <div class="row">
                    <div class="col-12 mt-3 text-center">
                        <h1>Menù di {{$restaurant->name}}</h1>
                    </div>
                    <div class="col-12 d-flex p-4 justify-content-evenly">
                                
                            <form action="{{ route('selectCategory') }}" method="POST">
                                @csrf
                                <input type="hidden" name="category_all" value="1" >
                                <button class="btn custom-btn smoothscroll " type="submit">Tutte le Categorie</button>
                            </form>
                        @foreach($categories as $category)

                                @if(count($category->dishes))
                                <form action="{{ route('selectCategory') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{ $category->id }}" >
                                    <input type="hidden" name="category_all" value="" >

                                    <button class="btn custom-btn smoothscroll" type="submit">{{$category->name}}</button>
                                </form>
                                @endif


                        @endforeach
                    </div>
</div>
        

<div class="col-12  d-flex justify-content-center">
    <div class="row">
            @foreach($dishes as $dish)
            <div class="col-12 d-flex justify-content-center ">

                    <div class="col-12 col-lg-2 d-flex my-2 ">
                        <h5 class="card-title">{{$dish->name}}</h5>

                    </div>
                    <div class="col-12 col-lg-4 d-flex my-2">
                        <p class="card-text">Descrizione: {{$dish->description}}</p>

                    </div>
                    <div class="col-12 col-lg-2 d-flex my-2 ">
                        <p class="card-text">{{$dish->price}} $</p>

                    </div>
                    <div class="col-12 col-lg-2 d-flex my-2 ">
                        <p class="card-text">{{$dish->category->name}}</p>

                    </div>
                    <div class="col-12 col-lg-2 d-flex my-2 ">
                        <a href="#" class="btn btn-dark">Aggiungi al carrello</a>

                    </div>
            </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">

                    <div class="col-12">
                        <h1>Siete il Benvenuto da {{$restaurant->name}}</h1>
                    </div>



                    <div class="col-12">
                        <p>Tavolo: {{$table->id}}</p>
                        <p>Ecco tutti i partecipanti al tavolo:</p>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                              </tr>
                            </thead>
                            @foreach($users as $user)
                            <tbody>
                              <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tbody>
                            @endforeach
                          </table>
                    </div>
                </div>
            </div>

        </div>


        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</x-layout>