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
                                type="text" class="form-control finish" id="finish" name="minute_length" min="10" max="200" required="required">
                            <label class="form-label">Minute length</label>
                            <input type="text" class="help-info" id="info" style="border:hidden;">
                        </div>
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