        <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de la Cápsula:') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="" name="name" value="{{ old('name', $capsula->name) }}" required autocomplete="name" autofocus>


            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción:') }}</label>

            <div class="col-md-6">
                <textarea name="description" rows="8" cols="80" class="form-control" value="{{ old('description', $capsula->description) }}"> </textarea>

            </div>
        </div>
        <div class="form-group row">
            <label for="imageCapsule" class="col-md-4 col-form-label text-md-right">{{ __('Imagen Cápsula:') }}</label>

            <div class="col-md-6">
                <input id="imageCapsule" type="file"  name="imageCapsule">

            </div>
        </div>
        <div class="form-group row">
            <label for="imageProduct" class="col-md-4 col-form-label text-md-right">{{ __('Imagen Producto:') }}</label>

            <div class="col-md-6">
                <input id="imageProduct" type="file"  name="imageProduct">

            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio:') }}</label>

            <div class="col-md-6">
                <input id="price" type="text" class="" name="price" value="{{ old('price', $capsula->price) }}" required autocomplete="price" autofocus>

        </div>
    </div>
    <div class="form-group row">
        <label for="flavor" class="col-md-4 col-form-label text-md-right">{{ __('Sabor:') }}</label>

        <div class="col-md-6">
            <input id="flavor" type="text" class="" name="flavor" value="{{ old('flavor', $capsula->flavor) }}" required autocomplete="flavor" autofocus>

    </div>
</div>

    <div class="form-group row">
        <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock:') }}</label>

        <div class="col-md-6">
            <input id="stock" type="text" class="" name="stock" value="{{ old('stock',$capsula->stock) }}" required autocomplete="stock" autofocus>

    </div>
</div>
