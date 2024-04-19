@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Experience</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>List Experience</h2>
                            </div>
                            @if(Auth::check() && Auth::user()->role === 'admin')
                            <div class="pull-right mb-2">
                                <a href="{{ route('experiences.create') }}" class="btn btn-primary">Add Experience</a>
                            </div>
                            @endif
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
                                <th scope="col">Date</th>
                                <th scope="col">Job Title</th>
                                <th scope="col">Company</th>
                                <th scope="col">Description</th>
                                @if(Auth::check() && Auth::user()->role === 'admin')
                                <th scope="col">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @if($experiences->count() > 0)
                                @foreach($experiences as $rs)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rs->date }}</td>
                                        <td>{{ $rs->job_title }}</td>
                                        <td>{{ $rs->company }}</td>
                                        <td>{{ $rs->description }}</td>
                                        <td>
                                            @if(Auth::check() && Auth::user()->role === 'admin')
                                            <a href="{{ route('experiences.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <form action="{{ route('experiences.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Experience not found</td>
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
