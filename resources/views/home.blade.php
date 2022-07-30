@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Home page setting
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="{{route('home')}}">Dashboard</a></li>
                        <li><a href="{{route('homepage.index')}}">setting personal page</a></li>
                        <li><a href="">setting Skills page</a></li>
                        <li><a href="">setting Blogs page</a></li>
                    </ul>
                </div>
            </div>
    </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Welcome <span style="color:red">{{ Auth::user()->name }}</span> !</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are Logged in !!
                </div>
                <span>You Can change some setting page in Sidbar</span>
            </div>
        </div>
    </div>
</div>
@endsection