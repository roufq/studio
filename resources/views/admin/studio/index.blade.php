@extends('admin.home')
@section('title', 'STUDIO')
@push('css')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">

@endpush
@section('content')
<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> EXPORTABLE TABLE </h2>
                        <ul class="header-dropdown">
                        <li><a href="{{route('studio.create')}}"><i class="zmdi zmdi-add">Add Studio</i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Id Brance</th>
                                    <th>Basic price</th>
                                    <th>Additional firday price</th>
                                    <th>Additional saturday price</th>
                                    <th>Additional sunday price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Id Brance</th>
                                    <th>Basic price</th>
                                    <th>Additional firday price</th>
                                    <th>Additional saturday price</th>
                                    <th>Additional sunday price</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($studio as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->branch_name}}</td>
                                    <td>{{$row->basic_price}}</td>
                                    <td>{{$row->additional_friday_price}}</td>
                                    <td>{{$row->additional_saturday_price}}</td>
                                    <td>{{$row->additional_sunday_price}}</td>
                                    <td>
                                        <a href="{{route('studio.edit',$row->id)}}" class="btn btn-sm btn-primary demo-google-material-icon"><i class="material-icons">create</i></a>
                                        <a href="{{url('admin/studio/destroy',$row->id)}}" onclick="return confirm('apa kamu serius?')" class="btn btn-sm btn-danger demo-google-material-icon"><i class="material-icons">delete</i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
@push('js')
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>

<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js --> 
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endpush