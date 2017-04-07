@extends('layouts.admin')

@section('title', 'Students')

<!--Page specific css-->
@section('page_css')
    <link href="{{URL::to('/bower_components/responsive-tables/responsive-tables.css')}}" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <style>
        form label.error {
            color: red;
        }
    </style>

@endsection
<!--/-->
@section('contents')

    {{--User Details--}}
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Coach Details</h2>

                </div>
                <div class="box-content">
                    <div class="box-content">
                        <ul class="dashboard-list">
                            <li>
                                <a href="#">
                                    <img class="dashboard-avatar" alt="{{$user->name}}"
                                         src="{{$user->image}}"></a>
                                <strong>Name:</strong>{{$user->name}}<br>
                                <strong>Email:</strong>{{$user->email}}<br>
                                <strong>Gender:</strong>{{$user->gender}}<br>
                                <strong>Phone:</strong>{{$user->phone_no}}<br>
                                <strong>Date of Birth:</strong> {{date("Y-m-d", strtotime($user->date_of_birth))}}<br>
                                <br>
                                <strong>Status:</strong> @if($user->status == 'active')<span
                                        class="label-success label label-default">Approved</span>@else <span
                                        class="label-warning label label-default">Pending</span>@endif
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->
    </div>

@endsection

@section('modal')

@endsection

<!--Loading page specific css-->
@section('page_js')

@endsection
<!--/-->

@section('custom_js')
@endsection
