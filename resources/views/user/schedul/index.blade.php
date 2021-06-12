@extends('user.home')
@section('title', 'schedule')
@section('content')
@push('css')
@endpush <form >
    <div class="title">
        <div class="text">
            <p style="color: #fff;">.</p>
            <h3>ini schedule</h3>
        </div>
    </div>
    <table id="table">

            <thead>
                <tr>
                    <th>No</th>
                    <th>movie_id</th>
                    <th>Id Studio</th>
                    <th>Start</th>
                    <th>price</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>movie_id</th>
                    <th>Id Studio</th>
                    <th>Start Time</th>
                    <th>price</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($schedule as $row)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->movie->name}}</td>
                    <td>{{$row->studio->name}}</td>
                    <td>{{$row->start}}
                        - {{$row->end}}</td>
                    <td>{{$row->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table><br>
    </form>
</div>
<br>
    @endsection @push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this)
                    .val()
                    .toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    @endpush