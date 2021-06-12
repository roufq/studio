@extends('welcome')
@section('content')
	<section>
		<div class="slider">
			<img src="asset/david-gavi-Ijx8OxvKrgM-unsplash.jpg">
		</div>
	</section>

	<div class="content">
		<div class="gallery">
		  <a target="_blank" href="">
		  @foreach($movies as $row)
			@if($row->picture_url)
		    	<img src="{{asset('storage/'.$row->picture_url)}}" alt="Cinque Terre" width="600" height="400">
			@endif
		  @endforeach
		  </a>
		</div>
	</div>
@endsection