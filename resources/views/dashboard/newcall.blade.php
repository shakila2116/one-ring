@extends('layouts.app')
<div id="page-wrapper">

    @section('content')
        <body class="newcall">
        {{--<div class="container">--}}
        <div class="container-fluid" style="margin-top:-269px; ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="font-weight: bold; color:#00b3ee;font-size:21px;">New Calls</div>
                            <div class="panel-body">
                                <div class="row">
                <table class="table table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Phone Number</th>
                        <th>Time</th>
                        <th>Action</th>
                        <th>View</th>
                    </tr>
                    @foreach($newCalls as $c)
                        <tr>
                            <td>{{ $c['id'] }}</td>
                            <td>{{ $c['who'] }}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$c['DateTime'])->diffForHumans() }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('enquiry/create-ticket/'.$c['id']) }}">Create Ticket</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('dashboard/view/'.$c['id']) }}">View</a>

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
