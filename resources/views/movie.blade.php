@extends('welcome')
@section('contet')
<div>
<div>
<h4 style="margin-left: 85%; margin-top: -2%; color:blanchedalmond;">{{ Auth::guard('user')->user()->name }}</h4>

</div>
	
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a
            class="dropdown-item"
            href="{{ route('user.logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
           <h4 style=" color:blanchedalmond;"> {{ __('Logout') }}</h4>
        </a>

        <form
            id="logout-form"
            action="{{ route('user.logout') }}"
            method="POST"
            style="display: none;">
            @csrf
        </form>
    </div>
</div>


	<div class="gallery" >
		@if($movie)
		@foreach($movie as $key=>$movie)
			<a class="gallery-img" href="{{route('detail',$movie->id)}}">
				@php
					$picture_url=explode(',',$movie->picture_url);
				//dd($picture_url);
				@endphp
				<img class="default-img" style="height: 400px; width:200px; margin: 10px;" src="{{'storage/'.$picture_url[0]}}" alt="{{'storage/'.$picture_url[0]}}">
			</a>
		@endforeach
		@endif
	</div>


@endsection