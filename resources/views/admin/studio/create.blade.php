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
                        <form id="form_advanced_validation" action="{{route('studio.store')}}" method="POST">
                        {{csrf_field()}}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" required>
                                    <label class="form-label">Name</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <p> <b>Id branch</b> </p>
                                <select class="form-control show-tick" name="branch_id" required>
                                    <option value="">---select branch---</option>
                                    @foreach($branch as $row)
                                        <option value="{{$row->id}}"> {{$row->name}}  </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group form-float">
                                <div class="input-group"> <span class="input-group-addon">Rp</span>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-line">
                                            <label class="form-label">Basic price</label>
                                            <input type="number" class="form-control" name="basic_price" required>
                                        </div>
                                        <span class="input-group-addon">.00</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="input-group"> <span class="input-group-addon">Rp</span>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-line">
                                        <input type="number" class="form-control" name="additional_friday_price" required>
                                        <label class="form-label">Friday price</label>
                                        </div>
                                        <span class="input-group-addon">.00</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="input-group"> <span class="input-group-addon">Rp</span>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-line">
                                        <input type="number" class="form-control" name="additional_saturday_price" required>
                                        <label class="form-label">Saturday price</label>
                                        </div>
                                        <span class="input-group-addon">.00</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="input-group"> <span class="input-group-addon">Rp</span>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="additional_sunday_price" pattern="[0-9]{13,16}" required>
                                            <label class="form-label">Sunday price</label>
                                        </div>
                                        <span class="input-group-addon">.00</span> 
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection