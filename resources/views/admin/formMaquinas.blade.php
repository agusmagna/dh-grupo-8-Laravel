<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de la Máquina:') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $maquina->name) }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>
</div>
<div class="form-group row">
<label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción:') }}</label>

<div class="col-md-6">
    <textarea name="description" rows="8" cols="80" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $maquina->description)}}">

    </textarea>

    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>
<div class="form-group row">
<label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imagen:') }}</label>

<div class="col-md-6">
    <input id="image" type="file"  name="image">

    @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>

<div class="form-group row">
<label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio:') }}</label>

<div class="col-md-6">
    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $maquina->price) }}" required autocomplete="price" autofocus>

    @error('price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>
<div class="form-group row">
<label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Color:') }}</label>

<div class="col-md-6">
<input id="color" type="text" class="form-control @error('color') is-invalid @enderror" name="color" value="{{ old('color', $maquina->color) }}" required autocomplete="color" autofocus>

@error('color')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock:') }}</label>

<div class="col-md-6">
<input id="stock" type="text" class="form-control @error('name') is-invalid @enderror" name="stock" value="{{ old('stock', $maquina->stock) }}" required autocomplete="stock" autofocus>

@error('stock')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
