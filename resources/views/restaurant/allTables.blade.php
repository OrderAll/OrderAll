<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 navCategoryContainerCustom">

                <div class="row">
                    @foreach($tables as $table)
                            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center">
                                <div class="card my-2  d-flex justify-content-center align-items-center text-center" style="width: 10rem;">
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