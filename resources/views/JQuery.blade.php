
@extends('layout/main')

@section('title', 'Latihan JQuery')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Form buat test</h1>
		
				<!-- <div class="ngumpet"> -->
				
					<p  class="ml-3"><label for = "usrNm">UserName</label>
						<input class="mt-2 ml-4 " type="text" name="usrNm" >
					</p>

					<p  class="ml-4"><label for = "passWd">Password</label>
						<input class="ml-4" type="text" name="passWd" >
					</p>

				<!-- </div> -->
		
 			<button id="hide" type="submit" class="btn btn-primary ml-4" name="hide">Hide</button>
 			<button id="show" type="reset" class="btn btn-primary ml-2" name="show">Show</button>

 			<button type="submit" class="btn btn-primary ml-4" name="btnSubmit">Submit</button>
 			<button type="reset" class="btn btn-primary ml-2" name="btnReset">Reset</button>
		</div>
	</div>
</div>

<!-- <script src="js/jquery-3.4.1.min"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	// $(document).ready(function(){
	// 	$("button").click(function(){
	// 	  $(".ngumpet").hide();		  

	// 	});
	// });
	$(document).ready(function(){
		$("#hide").click(function(){
		  $("p").hide();		  
		});

		$("#show").click(function(){
		  $("p").show();		  
		})
	});
</script>
@endsection
