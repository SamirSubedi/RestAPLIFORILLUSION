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
            <h3 class="box-title">Create Blog </h3>
          </div>
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
         
          <form role="form" action="/blog" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
          <div class="row">
          <div class="col-lg-2"></div>
              <div class="col-lg-6">
              <div class="form-group">
                <label for="title">BLOG Title</label>
                <input type="text" class="form-control"  name="title" placeholder="Enter Title" required="">
              </div><br>
              <div class="form-group">
                <label for="subtitle">Blog Subtitle</label>
                <input type="text" class="form-control" name="subtitle" placeholder="Enter Blog subtitles"required="">
              </div><br>
              <div class="form-group">
                <label for="subtitle">Slug</label>
                <input type="text" class="form-control" name="slug" required="">
              </div><br>
             
              <div class="form-group">
                <label>Multiple</label>
                <select class="form-control select2" name="categories[]" required=""multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                @foreach($abc as $Cate)
                  <option value="{{$Cate->id}}">{{$Cate->name}}</option>
              @endforeach
                </select>

              </div><br>
              <CENTER><img id="blah" src="#" width="190px" height="150px"></img><br> <div class="form-group">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <label for="unit">Upload Your Image Here:</label>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file"  required=""onchange="readURL(this);"  name="image" ></CENTER>

                <br>
              </div>
              
              </div>
         
              <label for="exampleInputFile">Enter Blog Body here</label>

              <textarea id="editor1" required=""name="body" rows="10" cols="80">
                                          
                    </textarea>
            </div>
            <!-- /.box-body -->

</div>
    

          <div class="box-footer">
             <button type="submit"   class="btn btn-primary center-block">Submit</button>
            </div>
          </form>

      
         

<!-- /.content-wrapper -->
@endsection


@section('footerSection')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{  asset('admin/ckeditor/ckeditor.js') }}"></script>
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
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
    });
</script>
<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection