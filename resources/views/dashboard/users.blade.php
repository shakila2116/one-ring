@extends('layouts.app')
<div id="page-wrapper">

    @section('content')
        <body class="users">
        <div class="container-fluid" style="margin-top:-269px; ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="font-weight: bold; color:#00b3ee;font-size:21px;">Users</div>
                        <div class="panel-body">
                            <div class="row">
            <table class="table table-hover">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>ViewUser</th>

                </tr>
                @foreach($user as $c)
                    <tr>
                        <td>{{ $c['id'] }}</td>
                        <td>{{ \App\Helpers\Helper::getUserData($c['id'],1) }}</td>
                        <td>{{ \App\Helpers\Helper::getUserData($c['id'],0) }}</td>

                        <td>
                            <a class="btn btn-primary" href="{{ url('enquiry/view-user/'.$c['id']) }}">View</a>
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