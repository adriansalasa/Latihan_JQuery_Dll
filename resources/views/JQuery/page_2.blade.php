
@extends('layout/main')

@section('title', 'Latihan JQuery')


@section('container')



<div class="container">

	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Form JQuery 2</h1>


		</div>
	</div>
</div>

<div class="row mt-4">
		<div class="col-10">
			
			<div id="HeadFli">Klik disini</div>
			<div id="HPnl">Ini adalah contoh slidedown pakai Jquery</div>

			<br><br><br><br><br><br>
			
			<div class="mt-5">
			<nav aria-label="pageNav">
			  <ul class="pagination">
			    <li class="page-item disabled">
			      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#" id="2">1</a></li>
			    <li class="page-item active "aria-current="page"><span class="sr-only">(current)</span>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script>		
		$(document).ready(function(){			
			$("#HeadFli").click(function(){
			  $("#HPnl").slideDown("slow");
			});
		});
	</script>
@endsection