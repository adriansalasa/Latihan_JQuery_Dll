<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<!-- <script src="{{asset('JS/jquery-3.4.1.min.js')}}"></script>
<script>
	$(document).ready(function(){
		$("#Fd_show").click(function(){
			$(".hideR").show();
		});

		$("#Fd_hide").click(function(){
			$(".hideR").hide();
		});

		setTimeout(function(){
			$(".hideR").hide();
		},200);
	});
</script> -->
@extends('layout/main')

@section('title', 'Latihan JQuery')


@section('container')


<div class="container">

	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Form Hide Automatic</h1>
		
				<div class="hideR row mt-3 ml-4 mb-3">
					<div id="r1" style="width: 40px; height: 40px;background-color: red"></div>
					<div class="ml-2" id="2" style="width: 40px; height: 40px;background-color: yellow"></div>
					<div class="ml-2" id="3" style="width: 40px; height: 40px;background-color: green"></div>
					<div class="ml-2" id="4" style="width: 40px; height: 40px;background-color: grey"></div>
				</div>
		
 			<button id="Fd_hide" type="submit" class="btn btn-primary ml-4" name="hide">Hide</button>
 			<button id="Fd_show" type="reset" class="btn btn-primary ml-2" name="show">Show</button>
 			
		</div>
	</div>


	<div class="row mt-4">

		<div class="col-10">	

			<div class="mt-5">

				<nav aria-label="pageNav">

				  <ul class="pagination">
					     <li class="page-item">
					    	<li class="page-item disabled">
						      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
						    </li>						    
						    @for($arrPg = 1; $arrPg <= 5; $arrPg++)
						    	@if ($arrPg == $p_id)						    	
						    		<li class="page-item active" aria-currentpage = "page">
						    			<span class="sr-only">(current)</span><a class="page-link" href="/JQuery/{{$p_id}}" id={{$p_id}}>{{$p_id}}</a>
						    		</li>
						    	@else
						    		<a class="page-link" href="/JQuery/{{$arrPg}}" id={{$arrPg}}>{{$arrPg}}</a>						    	
						    	@endif
						    @endfor					    						    
						    <li class="page-item">
					      		<a class="page-link" href="#">Next</a>
					    	</li>
					    </li>

				  </ul>

				</nav>

			</div>

		</div>

	</div>


</div>

<script src="{{asset('JS/jquery-3.4.1.min.js')}}"></script>
<script>
	$(document).ready(function(){
		$("#Fd_show").click(function(){
			$(".hideR").show();
		});

		$("#Fd_hide").click(function(){
			$(".hideR").hide();
		});

		setTimeout(function(){
			$(".hideR").hide();
		},200);
	});
</script>

@endsection