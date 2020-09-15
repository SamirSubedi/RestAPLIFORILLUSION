@extends('layouts.app')

@section('main-content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('/user/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Store</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Videoss<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <br>      <h4 style="text-align:center">Products In Our Store</h4> <div class="container" style="margin-top: 80px">
        <div class="row justify-content-center">
            <div class="col-lg-12">
             
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="{{ asset('storage/product_images/'.$pro->image) }}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $pro->image_path }}"
                                >
                                <div class="card-body">
                                    <a href="" name="h1" class="h1"><h6 align="center" class="card-title">{{ $pro->name }}</h6></a>
                                    <p align="center">Rs.{{ $pro->price }}</p>
                                    <p align="center">{!! $pro->description !!}</p>
                                 
                         
      </div>
 
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image }}" id="image" name="image">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                       <div class="row" >
                                    <button class="btn btn-secondary btn-sm" style="margin:0 auto;"class="tooltip-test" title="add to cart">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                                </button> 
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>        
                                  @endforeach

                        </div>
      
                </div>
            </div>
        </div>
    </div>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js" ></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script src="{{ asset('user/bootstrap-number-input.js') }}"></script>
<script>
// Remember set you events before call bootstrapSwitch or they will fire after bootstrapSwitch's events
$("[name='checkbox2']").change(function() {
	if(!confirm('Do you wanna cancel me!')) {
		this.checked = true;
	}
});

$('#after').bootstrapNumber();
$('#colorful').bootstrapNumber({
	upClass: 'success',
	downClass: 'danger'
});
</script>

@endsection