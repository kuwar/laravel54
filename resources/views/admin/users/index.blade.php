@extends('admin.layouts.admin')

@section('title', $title)

@section('styles')
    <link href="{{URL::to('admin/coco/assets/libs/jquery-datatables/css/dataTables.bootstrap.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{URL::to('admin/coco/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{URL::to('admin/coco/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('contents')
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Page Heading Start -->
            <div class="page-heading">
                <h1><i class='fa fa-users'></i> {{$title}}</h1>
                <h3>{{$subtitle}}</h3></div>
            <!-- Page Heading End-->

        {{--Alert--}}
        @include('admin.includes.alerts')

        <!-- Your awesome content goes here -->
            <div class="row">

                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-header">
                            <h2><strong>{{$title}}</strong> {{$subtitle}}</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content">
                            <br>
                            <div class="table-responsive">
                                <form class='form-horizontal' role='form'>
                                    <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>

                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <a class="btn btn-success"
                                                       href="{{route('users.show', $user->id)}}">
                                                        <i class="glyphicon glyphicon-eye-open icon-white"></i>
                                                        {{trans('view.SHOW')}}
                                                    </a>

                                                    <a class="btn btn-info"
                                                       href="{{URL::to('admin/users/'.$user->id.'/edit')}}">
                                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                                        {{trans('view.EDIT')}}
                                                    </a>

                                                    {!! Form::open([
                                                            'method' => 'DELETE',
                                                            'route' => ['users.destroy', $user->id],
                                                            'style' => 'display:inline',
                                                            'onSubmit' => "return confirm('Are you sure to delete student?');"
                                                            ])
                                                        !!}
                                                    <button type="submit" class="btn btn-danger" href="#">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        {{trans('view.DELETE')}}
                                                    </button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Start -->
        @include('admin.includes.footer')
        <!-- Footer End -->
        </div>
        <!-- ============================================================== -->
        <!-- End content here -->
        <!-- ============================================================== -->

    </div>
@endsection

@section('scripts')
    <script src="{{URL::to('admin/coco/assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::to('admin/coco/assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{URL::to('admin/coco/assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{URL::to('admin/coco/assets/js/pages/datatables.js')}}"></script>
@endsection