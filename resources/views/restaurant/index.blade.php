<x-layout>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row">
        <div class="col-12 shadow p-5  d-flex">
            <div class="row">
                <div class="col-12 my-5 text-center">
                    <h2>{{ $restaurant->name }}</h2>
                    <p>Indirizzo: {{ $restaurant->map }}</p>
                    <p>Di {{ $restaurant->user->name }}</p>
                </div>

                <div class="col-12 col-lg-4 text-center">
                    <h2>Cucina</h2>
                    <p>Tutti gli ordini</p>
                    <p>Ordini attivi</p>
                    <p></p>

                </div>
                <div class="col-12 col-lg-4 text-center">
                    <h2>Sala</h2>
                    <p>Modifica Ordinazione</p>
                    <p>Aggiungi articolo</p>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <h2>Impostazioni</h2>
                    <p><a href="{{route('createDish', compact('restaurant'))}}">Aggiungi Piatto</a></p>
                    <p><a href="{{route('menu', compact('restaurant'))}}">Menù</a></p>
                    <p>Rendi Staff</p>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>