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
                <div class="card-header">Create Your own Setting</div>

                <div class="card-body">
                    <form action="{{route('homepage.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="">Tittle</label>
                            <input type="text" class="form-control" name="tittle">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Subject</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Job</label>
                            <input type="text" class="form-control" name="job">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Explanation</label>
                            <textarea type="text" class="form-control" name="description"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Link</label>
                            <input type="url" class="form-control" name="link">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Photo</label>
                            <input type="file" class="form-control" name="picture" accept="image/png, image/jpeg">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-outline-primary px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection