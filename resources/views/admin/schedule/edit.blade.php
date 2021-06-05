@extends('admin.home')
@push('css')
<!-- Multi Select Css -->
<link rel="stylesheet" href="{{asset('assets/plugins/multi-select/css/multi-select.css')}}">
<!-- Bootstrap Select Css -->
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
@endpush
@section('content')
<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>ADVANCED VALIDATION</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" action="{{route('admin.schedule.update',$schedule->id)}}" method="POST">
                        @csrf
                            <div class="form-group form-float">
                                <p> <b>Id movie</b> </p>
                                <select class="form-control show-tick" name="movie_id" id="movie_id">
                                    <option value="0">---select branch---</option>
                                    @foreach($movie as $row)
                                        <option value="{{$row->id}}"> {{$row->name}}  </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group form-float">
                                <p> <b>Duration Minute</b> </p>
                                <div class="form-line">
                                    <input type="text" class="form-control"  id="minute">
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <p> <b>Id Studio</b> </p>
                                <select class="form-control show-tick studio" id="studio_id" name="studio_id">
                                    <option value="0">---select branch---</option>
                                    @foreach($studio as $row)
                                        <option value="{{$row->id}}"> {{$row->name}}  </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" value="{{$schedule->start}}" id="start" name="start"required>
                                    <label class="form-label">start</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" value="{{$schedule->end}}" id="end" name="end"required>
                                    <label class="form-label">end</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="basic_price" name="price"required>
                                    <label class="form-label">Basic price</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="firday" name="tambahan"required>
                                    <label class="form-label">Add Price</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="price" value="{{$schedule->price}}" name="price"required>
                                    <label class="form-label">price</label>
                                </div>
                            </div>
                            <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
@push('js')
<script>
    $('document').ready(function(){
        $('#movie_id').on('change', function(){
            var movie_id = $(this).val();
            $.ajax({
                type : "GET",
                url : "{{route('movie.data')}}/" + movie_id,
                success: function(data){
                    console.log(data);
                    $('#minute').val(data.minute_length)
                }
            });
        })

        $('#studio_id').on('change', function(){
            var studio_id = $(this).val();
            $.ajax({
                type : "GET",
                url : "{{route('studio.data')}}/" + studio_id,
                success: function(data){
                    console.log(data);
                    $('#basic_price').val(data.basic_price);
                }
            });
        })

        $('#basic_price').on('click', function(){
            var firday = $('#firday').val();
            var basic_price = $(this).val();
            var amount = parseInt(basic_price) + parseInt(firday);
            $('#price').val(amount);
        })
    })
</script>
@endpush