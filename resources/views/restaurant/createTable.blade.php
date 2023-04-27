<x-layout>
    <div class="tornaIndietro" style="">
        <a href="http://">
            <i class="fa-solid fa-arrow-left fa-2x"></i>
        </a>
    </div>
<div class="container shadow p-4 navCategoryContainerCustom">
    <div class="row">
        <div class="col-12 ">
            <h1>Crea il tuo nuovo Tavolo</h1>
        </div>
        <div class="col-12">    
            <form class="p-5 shadow" method="POST" action="{{Route('storeTable')}}">

            @csrf
        
        

        
        
            <div  class="mb-3">
        
                <label for="exampleInputPrice" class="form-label">Numero componenti</label>
                <input name="number" type="text" class="form-control" id="exampleInputPrice">
        
            </div>
        
        

        
            <div class="mb-3">
        
            <label for="exampleInputShop" class="form-label">Ristorante</label>
        
            <select name="rest_id" class="form-select" aria-label="Default select example" id="exampleInputShop">
                    <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
        
            </select>
        
            </div>
        
        
            <button type="submit" class="btn btn-primary mb-3">Invia</button>
        </form>    </div>
    </div>
</div>
</x-layout>