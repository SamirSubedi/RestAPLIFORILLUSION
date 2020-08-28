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
            <h3 class="box-title">Add Images </h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
         <div></div>
       
             
          <div class="row">
          <div class="col-sm-2"></div>
<div class="col-sm-5">
              <form role="form" action="/gallery" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
              <div class="form-group ">
                  <label>Select Album</label>
                 
                  <select class="form-control" name="gallery">
                  @foreach($abc as $album)
                    <option value="{{ $album->id}}"> {{$album->name}}</option>
                    @endforeach
                  </select>
                  
                </div>
              <div class="form-group">
                <label for="exampleInputFile">Gallery Image</label>
                <input type="file" name="image[]" multiple>

                <br>
                <div class="box-footer">
             <button type="submit"   class="btn btn-primary center-block">Submit</button>
            </div>
          </form>
        
              </div>
             
            <!-- /.box-body -->

</div>
        </div>

       
 
   
     
      
          <!-- /.box -->
        
        </div>
        <!-- /.col-->
      </div>

      <!-- ./row -->
   
  <!-- /.content-wrapper --> 
            <!-- form start -->

  <!-- /.content -->


<!-- /.content-wrapper -->
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
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection