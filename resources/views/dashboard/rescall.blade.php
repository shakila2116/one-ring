@extends('layouts.app')
<div id="page-wrapper">

    @section('content')
        <body class="rescall">
        <div class="container-fluid" style="margin-top:-269px; ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="font-weight: bold; color:#00b3ee;font-size:21px;">Responded Calls</div>
                        <div class="panel-body">
                            <div class="row">
                <table class="table table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Phone Number</th>
                        <th>Name</th>
                        <th>Last Responded at</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    @foreach($openEnquiry as $c)
                        <tr>
                            <td>{{ $c['id'] }}</td>
                            <td>{{ \App\Helpers\Helper::getUserData($c['enquiry_user_id'],0) }}</td>
                            <td>{{ \App\Helpers\Helper::getUserData($c['enquiry_user_id'],1) }}</td>
                            <td>
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$c['responded_time'])->diffForHumans() }}<br>
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$c['responded_time'])->toDayDateTimeString() }}
                            </td>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$c['in_time'])->diffForHumans() }}<br>
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$c['in_time'])->toDayDateTimeString() }}
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('enquiry/view-ticket/'.$c['id']) }}">View Ticket</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
</div>
</div>
</div>
</div>
        </body>
</div>

