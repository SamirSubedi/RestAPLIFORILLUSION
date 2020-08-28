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
            <h3 class="box-title">Add Video</h3>
          </div>
          
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
         
          <form role="form" action="/video" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
          <div class="row">
          <div class="col-lg-2"></div>
              <div class="pl-50 col-lg-6">
              <div class="form-group">
                <label for="title">&nbsp;&nbsp;Video Name</label>
                <input type="text" class="form-control"  name="title" placeholder="Enter Title"required="">
             
              </div>
              <div class="form-group">
                <label for="title">&nbsp;&nbsp;Youtube Video Link </label>
                <input type="text" class="form-control"  name="yvideo" placeholder="Enter youtuve video link "required="">
             
              </div>
              <label for="exampleInputFile">Video Short Description</label>

              <textarea id="editor1" name="descrip" rows="10" cols="80" required="">
                                         
                    </textarea>
            </div>
             
            <!-- /.box-body -->
</div>
          <div class="box-footer">
             <button type="submit"   class="btn btn-primary center-block">Submit</button>
            </div>
          </form>
        
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

@endsection