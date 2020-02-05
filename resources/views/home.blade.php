@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
                    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                    <!------ Include the above in your HEAD tag ---------->

                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

                    <div class="profile-block">
                    <div class="panel text-center">
                        <div class="user-heading"> <a href="#"><img src="http://cumbrianrun.co.uk/wp-content/uploads/2014/02/default-placeholder-300x300.png" alt="" title=""></a>
                        <h1>Fulan</h1>
                        <p>fulan@gmail.com</p>
                        <p>Wallet Balance $0.00</p>
                        </div>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                            <li class="active"><a href="#"><i class="fa fa-pencil-square-o"></i>Edit profile</a></li>
                            <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i>Subscription History</a></li>
                            <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i>Transaction History</a></li>
                        </ul>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
