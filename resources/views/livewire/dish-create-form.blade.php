<div>
    <form wire:submit.prevent="store" class="p-5 shadow">
    <div class="form-group">
        <label for="exampleInputName">Nome</label>
        <input wire:model.lazy="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
        @error('name') <span class="error">{{$message}}</span> @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputdescription">Descrizione</label>
        <input wire:model.lazy="description" type="text" class="form-control" id="exampleInputdescription" aria-describedby="descriptionHelp">
        @error('description') <span class="error">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputprice">Prezzo</label>
        <input wire:model.lazy="price" type="text" class="form-control" id="exampleInputprice" aria-describedby="priceHelp">
        @error('price') <span class="error">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
        <select wire:model.lazy="category_id" class="form-select" aria-label="Default select example" id="category_id">
            <option selected>Scegli la categoria</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
    </div>
    <div class="form-group">
        <select wire:model.lazy="rest_id" class="form-select" aria-label="Default select example" id="rest_id">
            <option value="{{$restaurant->id}}" >{{$restaurant->name}}</option>
          </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>