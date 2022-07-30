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
                            <li><a href="{{ route('home') }}">Dashboard</a></li>
                            <li><a href="{{ route('homepage.index') }}">setting personal page</a></li>
                            <li><a href="">setting Skills page</a></li>
                            <li><a href="">setting Blogs page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Home Page Setting</div>

                    <div class="card-body">
                        <table id="customers">
                            <tr>
                                <th>Title</th>
                                <th>Picture</th>
                                <th>About Me</th>
                                <th>Job</th>
                                <th>Explanation</th>
                                <th>Link</th>
                                <th>Edit</th>
                                <th>Remove</th>
                            </tr>
                            @foreach ($home as $item)
                                <tr>
                                    
                                    <td>{{ $item->tittle }}</td>
                                    <td><img src="{{ asset('Admin/images/homepage/' . $item->picture) }}" width="90"
                                            height="70" alt="{{ $item->picture }}"></td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->job }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td><a href="{{ route('homepage.edit', ['id' => $item->id]) }}">Edit</a></td>
                                    <td>
                                        <a href="" onclick="destroyUser(event,{{ $item->id }})">Remove</a>
                                        <form action="{{ route('homepage.destroy', $item->id) }}" id="Userdelete" method="POST">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <a href="{{ route('homepage.create') }}">
                            <button class="button-82-pushable mt-3" role="button">
                                <span class="button-82-shadow"></span>
                                <span class="button-82-edge"></span>
                                <span class="button-82-front text">
                                    Submit Setting
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('js')
        <script>
            function destroyUser(event, id) {
                event.preventDefault();
                doucument.querySelector('#Userdelete').submit();
            }
        </script>
    @endsection
