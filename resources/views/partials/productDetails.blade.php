
<div class="productSlide">
  <i class="fas fa-times"></i>
  <div class="productDetails">
      <div class="pdImageProduct">
        <img src="{{Storage::url($product->imageProduct)}}" alt="">
      </div>
    <div class="pDdescription">
      <div class="pdTitle">
        <h5 class="">{{$product->name}}</h5>
        <div class="pdCapsule">
          <img src="{{Storage::url($product->imageCapsule)}}" alt="">
        </div>
      </div>
      <p class="">{{$product->description}}</p>
      <p class="">Precio: $ {{$product->price}}</p>
      <p>La caja contiene 10 cápsulas</p>
      <div class="quantity">
        <label for="quantity">Cantidad: </label>
        <input type="text" name="quantity" value="">
      </div>
      <div class="pDboton">
        <a href="#" class="btn btn-primary">Agregar al carrito</a>
      </div>
    </div>
  </div>
</div>
