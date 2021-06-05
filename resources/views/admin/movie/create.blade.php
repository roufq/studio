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
                    action="{{route('movie.store')}}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" required="required">
                            <label class="form-label">Name</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input
                                type="number" class="form-control" id="minute_length" name="minute_length" required="required">
                            <label class="form-label">Minute length</label>
                        </div>
                            <label class="form-label" id="hours"></label>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="file" class="form-control" name="picture_url" required="required">
                            <label class="form-label">Picture</label>
                        </div>
                        <div class="help-info"></div>
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

    $("#minute_length").on('change',function(){
        var minute = $(this).val();
        var hours = minute / 60;
        var vHours = hours.toFixed(2);
        var min = '';

        if (hours < 1) {
            var min = 'Waktu kurang dari ';
            var vHours = 1;
        }else{
            var min = 'Waktu ';
        }
        
        $('#hours').text(min+vHours+' jam');
  });
});

</script>
@endpush