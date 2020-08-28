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
            <h3 class="box-title">Create Download File </h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
         
          <form role="form" action="/download" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
          <div class="row">
              <div class="col-lg-6">
              <div class="form-group">
                <label for="title">&nbsp;&nbsp;File NAME</label>
                &nbsp;&nbsp;&nbsp;<input type="text" class="form-control"  name="name" placeholder="Enter Name" required="">
              </div><br>
              <div class="form-group">
                <label for="file">&nbsp;&nbsp;Upload File</label>
                <input type="file" class="form-control" name="image"required="">
              </div><br>
             
            <!-- /.box-body -->

</div>
        </div>

       
 
   
     
      
          <!-- /.box -->
          <div class="box-footer">
             <button type="submit"   class="btn btn-primary center-block">Submit</button>
            </div>
          </form>
        
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