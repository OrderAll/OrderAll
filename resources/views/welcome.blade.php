<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 vh-100 d-flex justify-content-center align-items-center">
                
                    <h1>OrderAll</h1>
{{-- 
                    // <a class="nav-link active" aria-current="page" href="{{route('restaurant.index', compact('restaurant'))}}">Profilo Ristorante</a> --}}
                    @auth
                    @if(!Auth::user()->is_restAdmin)
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('becomeRestAdmin')}}">Lavora con Noi</a>
                    </li>
                    @else
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('restaurant.index', compact('restaurant'))}}">Profilo Ristorante</a>
                    </li>
                    @endif
                    @endauth

              
            </div>
        </div>
    </div>
</x-layout>