@extends('layout.main')
@section('title', 'js')
@section('container')
<!-- 
<h2>JavaScript Array.forEach()</h2>
<p>Calls a function once for each array element.</p>
<p id="demo"></p>
<script>
var txt = "";
var numbers = [45, 4, 9, 16, 25];
numbers.forEach(myFunction);
document.getElementById("demo").innerHTML = txt;

function myFunction(value) {
  txt = txt + value + "<br>";   
}
</script> -->
<div class="container">
	<div class="row">
		<h3>Latihan Javascript</h3>
	</div>
	<div class="row">
		<p>Javascript Array foreach</p>
	</div>
	<div class="row">
		<p id="JS"></p>
	</div>
	<div class="row">
		<nav aria-label="pageNav">
			<ul class="pagination">
				    <li class="page-item active "aria-current="page">
				    	<span class="sr-only">(current)</span>
				    	<a class="page-link" href="/JQuery" id="N_ID">1</a>
				    </li>
			</ul>
		</nav>
	</div>
</div>
<script>
			var a = "";
			var b = "";
			var arrIdx = [4,5,6,7,8];
			arrIdx.forEach(funcLoop);	
			document.getElementById("JS").innerHTML = a;
			function funcLoop(value)			
			{
				a = a + value + "<br>";
			}
			var b = document.getElementById("N_ID");
			alert(b.innerHTML);
</script>
@endsection
