@extends('admin.home')
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
                        <form id="form_advanced_validation" action="{{route('admin.update', $admin->id)}}" method="POST">
                        {{csrf_field()}}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" value="{{$admin->name}}" pattern="[a-zA-Z]+" autofocus  maxlength="20" minlength="4" name="name"required>
                                    <label class="form-label">Name</label>
                                    <label class="help-info"> Min. 4, Max. 20 characters,Input hanya boleh huruf a-z tanpa spasi!</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="Email" class="form-control" value="{{$admin->email}}" name="email"required>
                                    <label class="form-label">Email</label>
                                    <label class="help-info"> example@gmail.com </label>
                                </div>
                            </div>
                            <input type="checkbox" value="show" onclick="myFunction()">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" id="password" maxlength="15" minlength="6" class="form-control" name="password"required>
                                    <label class="form-label">Password</label>
                                    <label class="help-info"> Min. 6, Max. 15 characters </label>
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
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
@endpush
