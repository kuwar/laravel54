@extends('layouts.admin')

@section('title', 'User')

<!--Page specific css-->
@section('page_css')
    <link href="{{URL::to('/bower_components/responsive-tables/responsive-tables.css')}}" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

@endsection
<!--/-->

@section('contents')

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well top-bar" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Notifications</h2>
                    @if (Entrust::hasRole('admin') || Entrust::hasRole('coach') || Entrust::hasRole('staff'))
                        <div class="box-icon add-btn">
                            <a href="{{url('admin/push-notifications/create')}}"
                               class="btn btn-setting btn-round btn-default"><i
                                        class="glyphicon glyphicon-plus"></i>&nbsp; ADD</a>
                        </div>
                    @endif
                </div>
                <div class="box-content">

                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive"
                           id="allList">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if ($notifications)
                            @foreach($notifications as $notification)
                                <tr>
                                    <td>{{$notification->title}}</td>
                                    <td>{{$notification->body}}</td>
                                    <td>{{$notification->created_at}}</td>
                                    <td>
                                        @if (Entrust::hasRole('admin'))
                                            {!! Form::open([
                                                    'method' => 'post',
                                                    'url' => url('admin/push-notifications/delete/' . $notification->id),
                                                    'style' => 'display:inline',
                                                    'onSubmit' => "return confirm('Are you sure to delete notification?');"
                                                    ])
                                                !!}
                                            <button type="submit" class="btn btn-danger" href="#">
                                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                                Delete
                                            </button>
                                            {!! Form::close() !!}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->

@endsection

@section('modal')
@endsection

<!--Loading page specific css-->
@section('page_js')
    <!-- library for making tables responsive -->
    <script src="{{URL::to('/bower_components/responsive-tables/responsive-tables.js')}}"></script>
    <!-- data table plugin -->
    <script src="{{URL::to('/js/jquery.dataTables.min.js')}}"></script>

@endsection
<!--/-->

@section('custom_js')
    <script>
        $(document).ready(function () {

            $('#allList').DataTable({
                "sPaginationType": "full_numbers"
            });
            $(".first.paginate_button, .last.paginate_button").hide();

        });
    </script>
@endsection
