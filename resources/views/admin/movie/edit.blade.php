@extends('admin.home') 
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>ADVANCED VALIDATION</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a
                            href="javascript:void(0);"
                            class="dropdown-toggle"
                            data-toggle="dropdown"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:void(0);">Action</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Another action</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form
                    id="form_advanced_validation"
                    action="{{route('movie.update',$movie->id)}}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input
                                type="text"
                                class="form-control"
                                value="{{$movie->name}}"
                                name="name"
                                pattern="[a-zA-Z]+" 
                                autofocus
                                required="required">
                            <label class="form-label">Name</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                        <input type="number" class="form-control finish" id="finish" value="{{$movie->minute_length}}" name="minute_length" min="10" max="200" required="required">
                            <label class="form-label">Minute length</label>
                            <label for="" class="help-info" id="info"></label>
                        </div>
                    </div>
                    <div class="dz-message">
                        <div class="drag-icon-cph">
                            <i class="material-icons">touch_app</i>
                        </div>
                        @if($movie->picture_url)
                        <img src="{{asset('storage/'.$movie->picture_url)}}" width="10%" alt=""></td>
                    @endif
                    <div class="fallback">
                        <input type="file" name="picture_url" id="picture_url" value="{{$movie->picture_url}}" required placeholder="new picture">
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
$(document).ready(function(){
    $(".finish").on('change',function(){
        // var hours = perseInt(this.val())/60;
        var jam = $(this).val();
        var hours = Math.floor(jam / 60);
        var minuts = jam % 60;
        $('#info').val(hours + ' jam' + minuts + ' minuts');
  });
});

</script>
@endpush