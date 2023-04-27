<x-layout>
    <div class="tornaIndietro" style="">
        <a href="http://">
            <i class="fa-solid fa-arrow-left fa-2x"></i>
        </a>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>I tuoi tavoli</h1>
            </div>
            <div class="col-12 ">

                <div class="row">
                    @foreach($tables as $table)
                            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center">
                                <div class="col my-2 d-flex justify-content-center align-items-center text-center shadow" style="width: 10rem;height: 10rem;">
                                    <div class="card-body">
                                    <h5 class="card-title">Tavolo {{$table->id}}</h5>
                                    <p class="card-text">Utenti nel tavolo: {{$table->count}}/{{$table->number}}</p>
                                    @if(!empty($user->table_id))
                                    <p><a href="{{route('menu', compact('restaurant'))}}">Menù</a></p>
                                    @endif
                                    @if(empty($user->table_id))
                                    <form action="{{ route('addToTable', compact('table')) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="table_id" value="{{ $table->id }}" >
                                        <input type="hidden" name="rest_id" value="{{ $restaurant->id }}" >
                                        <button class="btn btn-info" type="submit">Accedi al tavolo</button>
                                    </form>
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