<!-- Navigation -->
<style type="text/css">
    body.dashboard li.dashboard,body.newcall li.newcall,body.rescall li.rescall,body.closedcall li.closedcall,body.users li.users,body.ques li.ques,body.issue li.issue
     { background-color: #000;}
    body.dashboard li.dashboard a, body.newcall li.newcall a, body.rescall li.rescall a, body.closedcall li.closedcall a, body.users li.users a, body.ques li.ques a, body.issue li.issue a
    { color: #fff; }
</style>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Customercare Details</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <div style="margin:13px 23px;color:white;"> Welcome User </div>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="dashboard">
                <a href="/dashboard"> Dashboard</a>
            </li>
            <li class="newcall">
                <a href="/dashboard/newcall">Newcalls</a>
            </li>
            <li class="rescall">
                <a href="/dashboard/rescall">Responded Calls</a>
            </li>
            <li class="closedcall">
                <a href="/dashboard/closed-tickets"><i class="fa fa-fw fa-phone-square"></i> Closed calls</a>
            </li>
            <li class="users">
                <a href="/dashboard/users"><i class="fa fa-fw fa-phone-square"></i>Users</a>
            </li>
            <li class="ques">
                <a href="/register/index"><i class="fa fa-fw fa-phone-square"></i>Questions</a>
            </li>
            <li class="issue">
                <a href="/register/view"><i class="register"></i>Issue Form</a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>