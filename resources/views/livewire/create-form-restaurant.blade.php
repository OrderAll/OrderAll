<div>
    <form wire:submit.prevent="store" class="p-5 shadow">
                
    <div class="form-group">
        <label for="exampleInputName">Nome</label>
        <input wire:model.lazy="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
        @error('name') <span class="error">{{$message}}</span> @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputMap">Indirizzo</label>
        <input wire:model.lazy="map" type="text" class="form-control" id="exampleInputMap" aria-describedby="mapHelp">
        @error('map') <span class="error">{{$message}}</span> @enderror
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>