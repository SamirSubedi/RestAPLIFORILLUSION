
@extends('layouts.app')

@section('headSection')
<style>
#abc
	{
		color:black;
	}
    a.he:hover, a.he:active {
  background-color:red;
  display: inline-block;
}
    a.he:link, a.he:visited {
  background-color:white;
  color: black;
  padding: 8px 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:15px;
  font-weight: normal;
}
#abc:hover
{
	text-decoration: none;
	color: green;
}
#abc:visited
{
	text-decoration: none;
	color: navy;
}


	.card:hover{
    -webkit-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.95);
    -moz-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.95);
    box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.95);
}


</style>
@endsection

@section('main-content')


<div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Bartenders Profile</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
 <br>

    <div class="row">
@foreach($abc as $blog)


<div class='col col-sm-12 col-lg-4 '> <div class='card text-center bg-light ' >

	 <div class="card-header">  
     <?php      $string =$blog->barten->name;
$substring = substr($string, 0, strpos($string, ' '));?>
     <i class="fas fa-user-edit"></i><?php echo $substring; ?>

  </div>
    <img class='card-img-top' src="{{ asset('storage/cv_images/'.$blog->image) }}" width='110px' height='200px'>

    <div class='card-body'>

      <h3 class='card-title'>{{$blog->name}}</h3>
      <p class='card-text'><i>{{$blog->email}}</i></p>
     <div class="card-footer text-muted"><a class="he" name="he" href="{{ asset('storage/cv_files/'.$blog->cv) }}"><i class="fas fa-book-open"></i>&nbsp;&nbsp; C.V&nbsp;&nbsp;</a></div>

  
    </div>
    <br>
  </div><?php $id=$blog->id;
 
  if($id%3==0)
  {
  echo "<br>";
  }
  ?>
  
  </div>
@endforeach
</div><br>
{!! $abc->render() !!}<br>
</div>                 </div>
</div>
<script>
    $(document).ready(function(){

        $('.col-lg-4').hover(
            // trigger when mouse hover
            function(){
                $(this).animate({
                    marginTop: "-=1%",
                },200);
            },

            // trigger when mouse out
            function(){
                $(this).animate({
                    marginTop: "0%"
                },200);
            }
        );
    });
</script>









       
         
  
 
@endsection