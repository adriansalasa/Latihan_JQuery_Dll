
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

	<div class="row mt-4">
		<div class="col-10">
			
			<div id="HeadFli">Klik disini</div>
			<div id="HPnl">Ini adalah contoh slidedown pakai Jquery</div>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<div class="mt-5">
			<nav aria-label="pageNav">
			  <ul class="pagination">
			    <li class="page-item disabled">
			      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
			    </li>
			    <li class="page-item active "aria-current="page"><span class="sr-only">(current)</span><a class="page-link" href="#" id="2">1</a></li>
			    <li class="page-item">
			      <a class="page-link" href="/JQuery/2" id="2">2</a>
			    </li>
			    <li class="page-item"><a class="page-link" href="/JQuery/3" id="3">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#">Next</a>
			    </li>
			  </ul>
			</nav>
			</div>

		</div>		
	</div>
</div>

	<style>
		#HPnl, #HeadFli {
			padding : 5px;
			text-align: center;
			background-color: #e5eecc;
			border: solid 1px #c3c3c3;
		}

		#HPnl {
			padding: 50px;
			display: none;
		}
	</style>
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
			});

			$("#HeadFli").click(function(){
			  $("#HPnl").slideDown("slow");
			});
		});
	</script>

@endsection
