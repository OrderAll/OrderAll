<x-layout>

    <div class="container cardsContainerCustom">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach($dishes as $dish)


                            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center">

                                <div class="card my-2 d-flex flex-column justify-content-center align-items-center  text-center cardDishes"  id="category_{{$dish->category_id}}">
                                    <div class="card-body">
                                        
                                        <h5 class="card-title">{{$dish->name}}</h5>
                                        <p class="card-text">Descrizione: {{$dish->description}}</p>
                                        <p class="card-text">{{$dish->price}} $</p>
                                        <p class="card-text">{{$dish->category->name}}</p>

                                    </div>
                                </div>

                            </div>


                    @endforeach
                </div>

            </div>
        </div>
    </div>


    <div class="container shadow fixed-top navCategoryContainerCustom">
        <div class="row">
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
        </div>
    </div>
</x-layout>