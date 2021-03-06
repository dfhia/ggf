@include('app.user.app.header')
<div class="jumbotron mb-0 img-fluid w-100 d-block bg1">
<div class="container">
    <div class="row justify-content-center">
        @foreach($product as $products)
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card bb">
              <img src="{{ url('images/products') }}/{{ $products->image}}" class="card-img-top"><hr>
              <div class="card-body">
                <h5 class="card-title">{{ $products->name_product }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($products->harga)}} <br>
                    <strong>Stok :</strong> {{ $products->quantity }} <br>
                    <hr>
                    <strong>Details :</strong> {{ $products->details }}<br>
                    @if($products->name_product == "Diton King Spray")
                    <strong>List Warna : </strong><br>
                    <a href="{{ route('spray300ml') }}" class="btn btn-outline-dark"><span>Ukuran 300ML</span></a>
                    <a href="{{ route('spray400ml') }}" class="btn btn-outline-dark"><span>Ukuran 400ML</span></a>
                    @else
                    @endif
                    <strong>Description :</strong> <br>
                    {{ $products->description }}
                </p>
              </div>
              <div class="card-footer">
                <a href="{{ route('order.index',$products) }}" class="bt1 bt1--stripe bt1--m text-nowrap"><i class="fa fa-shopping-cart"></i> Order</a>
                <a href="{{ route('product_show', $products) }}" class="bt1 bt1--stripe bt1--m"><i class="fa fa-eye"></i> View</a>
            </div>
            </div>
        </div>
        @endforeach
        </div>
        <div class="row justify-content-center">
        {{ $product->links() }}
        </div>
    </div>
</div>

@include('app.user.app.footer')
