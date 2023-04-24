<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 shadow">
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
                    <div class="col-12 bg-success d-flex justify-content-center align-items-center">
                        <div class="row">
                            <div class="col-12 mt-3 text-center">
                                <h1>Menù di {{$restaurant->name}}</h1>
                            </div>
                            <div class="col-12 d-flex p-4 justify-content-evenly">
                                <button id="categoryInput" name="categoryInput" class="btn btn-info" >
                                        
                                    <a href="{{route('menu', compact('restaurant'))}}">Tutte le Categorie</a>
                                </button>
                                @foreach($categories as $category)
        
                                        @if(count($category->dishes))
                                        <button id="categoryInput" name="categoryInput" class="btn btn-info" >
        
                                            <a href="{{route('dishesByCategory', compact('category','restaurant'))}}">{{$category->name}}</a>
                                        </button>
                                        @endif
                                @endforeach
        
                            </div>
        
                        </div>
                    </div>
                    <div class="col-12">
                        <h2>Menù</h2>
                    </div>

                        @foreach($dishes as $dish)

                        <div class="col-12 d-flex justify-content-center align-items-center">

                            <div class="card my-2 d-flex flex-column justify-content-center align-items-center  text-center cardDishes"  id="category_{{$dish->category_id}}">
                                <div class="card-body">
                                    
                                    <h5 class="card-title">{{$dish->name}}</h5>
                                    <p class="card-text">Descrizione: {{$dish->description}}</p>
                                    <p class="card-text">{{$dish->price}} $</p>
                                    <p class="card-text">{{$dish->category->name}}</p>
                                    <a href="#" class="btn btn-primary">Aggiungi al carrello</a>

                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>



                </div>
            </div>

        </div>
    </div>
</x-layout>