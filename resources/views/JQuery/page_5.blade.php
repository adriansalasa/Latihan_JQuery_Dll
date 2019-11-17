@extends('layout.main')
@section('title', 'Fade Javascript')
@section('container')
<div class="container">	

			<div class="mt-4" id="slideToggle" name="slideToggle">Click to SlideUP and SlideDown</div>		
 			<div  id="panelToggle" name="panelToggle">Panel can SlideUp and SlideDown...!</div>	 			 			

		<div class="row mt-4">
			<div class="col-10">								
				<div class="mt-5">
					<nav aria-label="pageNav">
					  <ul class="pagination">
					    <!-- <li class="page-item disabled">
					      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
					    </li> -->
					    <!-- <li class="page-item">
					    	<a class="page-link" href="/JQuery" id="1">1</a>
					    </li>
					    <li class="page-item">
					      <a class="page-link" href="/JQuery/2" id="2">2</a>
					    </li>
					    <li class="page-item"><a class="page-link" href="/JQuery/3" id="3">3</a></li>
					    <li class="page-item"><a class="page-link" href="/JQuery/4" id="4">4</a></li>
					    <li class="page-item active" aria-currentpage = "page"><span class="sr-only">(current)</span><a class="page-link" href="/JQuery/5" id="5">5</a></li> -->
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
					    <!-- <li class="page-item">
					      <a class="page-link" href="#">Next</a>
					    </li> -->
					  </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="{{asset('JS/jquery-3.4.1.min.js')}}"></script>
<script>	
	$(document).ready(function(){
		$('#slideToggle').click(function(){
			$('#panelToggle').slideToggle('slow');
		});
	});
</script>
@endsection