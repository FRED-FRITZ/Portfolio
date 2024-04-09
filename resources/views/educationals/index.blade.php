@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Educational</title>

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
                <h2>Educational Attainment</h2>
            </div>
            @if(Auth::user()->role === 'admin')
            <div class="pull-right mb-2">
                <a href="{{ route('educationals.create') }}" class="btn btn-primary">Add Educational</a>
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
                <th scope="col">Year Graduated</th>
                <th scope="col">School Type</th>
                <th scope="col">School Name</th>
                <th scope="col">Description</th>
                @if(Auth::user()->role === 'admin')
                <th scope="col">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @if($educationals->count() > 0)
                @foreach($educationals as $rs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rs->year_graduated }}</td>
                        <td>{{ $rs->school_type }}</td>
                        <td>{{ $rs->school_name }}</td>
                        <td>{{ $rs->description }}</td>
                        <td>
                            <a href="{{ route('educationals.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>

                            <div class="btn-group" role="group" aria-label="Basic example">

                                <form action="{{ route('educationals.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">Educational not found</td>
                </tr>
            @endif
        </tbody>
    </table>

</div>

</body>
</html>
@endsection
