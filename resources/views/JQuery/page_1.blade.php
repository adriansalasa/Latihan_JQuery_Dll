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
	<script src="{{asset('JS/jquery-3.4.1.min.js')}}"></script>
	<script>		
		$(document).ready(function(){
			$("#hide").click(function(){
			  $("p").hide();		  
			});

			$("#show").click(function(){
			  $("p").show();		  
			});			
		});
	</script>
@endsection