@extends('welcome') 
@section('contet')
<section>
            @if($movie->picture_url)
            <img
                src="{{asset('storage/'.$movie->picture_url)}}"
                id="gambar1">
        	@endif
</section>
<div class="content">
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>movie Name</th>
      <th>Minuts</th>
      <th>Time Start</th>
      <th>Studios Name</th>
      <th>Price</th>
    </tr>
    <tr>
      <td>{{$movie->name}}</td>
      <td>{{$movie->minute_length}}</td>
      <td>{{$schedule->start}}</td>
      <td>{{$studios->name}}</td>
      <td>{{$schedule->price}}</td>
    </tr>
  </table>
</div>
</div>

@endsection