@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <svg width="700" height="500" id="entorno">
		<g id="fondo">
			<image xlink:href="img/quizanumbers.png" width="400" height="400" x="200" y="50">

			</g>
	<g class="padre" id="0"><image xlink:href="img/1.0.png" class="movil"></g>
	<g class="padre" id="1"><image xlink:href="img/2.0.png" class="movil"></g>
	<g class="padre" id="2"><image xlink:href="img/3.0.png" class="movil"></g>
	<g class="padre" id="3"><image xlink:href="img/4.0.png" class="movil"></g>
	<g class="padre" id="4"><image xlink:href="img/5.0.png" class="movil"></g>
	<g class="padre" id="5"><image xlink:href="img/6.0.png" class="movil"></g>
	<g class="padre" id="6"><image xlink:href="img/7.0.png" class="movil"></g>
	<g class="padre" id="7"><image xlink:href="img/8.0.png" class="movil"></g>
	<g class="padre" id="8"><image xlink:href="img/9.0.png" class="movil"></g>
</svg>
<div class="row justify-content-center mt-3">
    <audio class="audio" controls autoplay loop>
        <source src="media/EnglishNumbers.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio> 
    
</div>
</audio> 
    </div>
</div>
  </div>
@endsection
