@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 

  <!-- Main content -->
 
  <section class="content">
  
      <!-- left column -->
      
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Product</h3>
          </div>
          
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
         
          <form role="form" action="/product/{{$post->id}}" method="post" enctype="multipart/form-data">
          {{ method_field('PATCH') }}
          {{csrf_field()}}
          
          
          <div class="row">
          <div class="col-lg-2"></div>
              <div class="pl-50 col-lg-6">
              <div class="form-group">
                <label for="title">&nbsp;&nbsp;Product Name</label>
                <input type="text" class="form-control"  value="{{$post->name}} "name="name" placeholder="Enter Title"required="">
              </div><br>
              <div class="form-group">
                <label for="title">&nbsp;&nbsp;Price(Rs.)</label>
                <input type="number" class="form-control"  name="price" value="{{$post->price}}" placeholder="Enter Price of the product"required="">
              </div><br> <div class="form-group">
                <label for="title">&nbsp;&nbsp;Available Quantity</label>
                <input type="number" class="form-control"  name="quantity" value="{{$post->Quantity}}" placeholder="Enter Available Quantity "required="">
              </div><br>
              <div class="form-group">
                <label for="title">&nbsp;&nbsp;Product Slug</label>
                <input type="text" class="form-control"  name="slug"value="{{$post->slug}}" placeholder="Enter Slug "required="">
              </div><br>
              <u>Use Landscape Image</u>
              <CENTER><img id="blah" src="{{ asset('storage/product_images/'.$post->image) }}" width="190px" height="150px"></img><br> <div class="form-group">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <label for="unit">Upload Your Image Here:</label>
              <div class="form-group">
                <label for="exampleInputFile">Product Image&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="file" onchange="readURL(this);"  name="image" >{{$post->image}}</CENTER>

                <br>
              </div>
              
              </div>

              <label for="exampleInputFile">Product Short Details here</label>

              <textarea id="editor1" name="descrip" rows="10" cols="80" required="">
              {{$post->description}}                   
                    </textarea>
            </div>
             
            <!-- /.box-body -->
</div>
          <div class="box-footer">
             <button type="submit"   class="btn btn-primary center-block">Submit</button>
            </div>
          </form>
        
        </div>
        <!-- /.col-->
      

@endsection


@section('footerSection')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{  asset('admin/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
    });
</script>
<script>
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection