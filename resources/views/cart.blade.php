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
    
    <br> 
    <div class="container" style="margin-top:50px">
       
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors0>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7" >
                <br>
                @if(\Cart::getTotalQuantity()>0)
                    <h4>{{ \Cart::getTotalQuantity()}} Product(s) In Your Cart</h4><br>
                @else
                    <h4>No Product(s) In Your Cart</h4><br>
                    <a href="/products" class="btn btn-dark">Continue Shopping</a>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3 col-sm-5 ">
                            <img src="{{ asset('storage/product_images/'.$item->attributes->image) }}" style="margin-left:10px;" class="img-thumbnail" width="200" height="200">
                        </div>
                        <div class="col-lg-5 col-sm-3 ">
                     
                                <b >{{ $item->name }}</b><br>
                                <b >Price: </b>Rs{{ $item->price }}<br>
                                <b >Sub Total: </b>Rs{{ \Cart::get($item->id)->getPriceSum() }}<br>
                                {{--                                <b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                          
                        </div>
                        <div class="col-lg-4 col-sm-4 " >
                            <div class="row">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                        <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                               id="quantity" name="quantity" style="width: 70px; margin-right: 20px;">
                                        <button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i class="fa fa-edit"></i></button>
                                    </div>
                                </form>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-dark btn-sm" style="margin-right: 25px;"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
                @if(count($cartCollection)>0)
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-secondary btn-md">Clear Cart</button>
                   
                    </form>
                @endif
                <br>
            </div>
            @if(count($cartCollection)>0)
                <div class="col-lg-5 ">
               <div class="card"><?php $id=1;?>
                    
                        <ul class="list-group list-group-flush">
                            <center>Invoice No: <?php echo rand(10,10000);?></center>
                         
<table class="table table-bordered"><thead><tr><th>SN</th><th>Products</th><th>Quantity</th><th>Price</th><th>Sum</th></thead></tr>   @foreach($cartCollection as $item)
<tr>
<td><?php echo $id;?>  </td>
<td>{{$item->name}} </td><td>{{$item->quantity}}</td>
<td> Rs.{{$item->price}}</td>

<td>Rs{{ \Cart::get($item->id)->getPriceSum() }}</td><?php $id=$id+1;?>
</tr> @endforeach
</table> 
                      <center> <h5>Sum Total: Rs.{{ \Cart::getTotal() }}</h5></center>
                     
                        </ul>
                    </div>
                    <br><a href="/products" style="margin-top:7px;" class="btn btn-dark">Continue Shopping</a>
                    <a href="/checkout" style="margin-top:7px;"class="btn btn-success">Proceed To Checkout</a>
                </div>
            @endif
        </div>
        <br><br>
    </div>
@endsection
