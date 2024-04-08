@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webinar</title>

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
                <h2>Webinar</h2>
            </div>
            <div class="pull-right mb-2">
                <a href="{{ route('webinars.create') }}" class="btn btn-primary">Add Webinar</a>
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
                <th scope="col">Certificate</th>
                <th scope="col">Agenda</th>
                <th scope="col">Host Name</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($webinar->count() > 0)
                @foreach($webinar as $rs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rs->certificate }}</td>
                        <td>{{ $rs->agenda }}</td>
                        <td>{{ $rs->host_name }}</td>
                        <td>{{ $rs->date }}</td>
                        <td>
                            <a href="{{ route('webinars.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>

                            <div class="btn-group" role="group" aria-label="Basic example">

                                <form action="{{ route('webinars.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')">
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
                    <td colspan="6" class="text-center">Webinars not found</td>
                </tr>
            @endif
        </tbody>
    </table>

</div>

</body>
</html>
@endsection
