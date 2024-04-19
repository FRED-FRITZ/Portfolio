@extends('home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>List About</h2>
                            </div>
                            <div class="pull-right mb-2">
                            </div>
                        </div>
                    </div>

                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Job</th>
                                <th scope="col">Description</th>
                                <th scope="col">From</th>
                                <th scope="col">Lives In</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Age</th>
                                <th scope="col">Gender</th>
                                @if(Auth::check() && Auth::user()->role === 'admin')
                                <th scope="col">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @if($about)
                                @foreach($about as $rs)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rs->name }}</td>
                                        <td>{{ $rs->job }}</td>
                                        <td>{{ $rs->description }}</td>
                                        <td>{{ $rs->from }}</td>
                                        <td>{{ $rs->lives_in }}</td>
                                        <td>{{ $rs->birthday }}</td>
                                        <td>{{ $rs->age }}</td>
                                        <td>{{ $rs->gender }}</td>
                                        <td>
                                            @if(Auth::check() && Auth::user()->role === 'admin')
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('about.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                            </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">About not found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
