
<div class="productSlide">
  <span class='close'><i class="fas fa-times"></i></span>
  <div class="productDetails">
    <div class="pDImages">
      <div class="changeImage">
        <img src="{{Storage::url($product->imageProduct)}}" alt="">
        <img src="{{Storage::url($product->imageCapsule)}}" alt="">
      </div>
      <div class="pDCarousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{Storage::url($product->imageProduct)}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="capsuleCarousel d-block w-100" src="{{Storage::url($product->imageCapsule)}}" alt="Second slide">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="pDdescription">
      <h5 class="">{{$product->name}}</h5>
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
