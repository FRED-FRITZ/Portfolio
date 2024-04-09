@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>

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
                <h2>List Contacts</h2>
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
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                @if(Auth::user()->role === 'admin')
                <th scope="col">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @if($contacts->count() > 0)
                @foreach($contacts as $rs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rs->name }}</td>
                        <td>{{ $rs->email }}</td>
                        <td>{{ $rs->subject }}</td>
                        <td>{{ $rs->message }}</td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">Contact not found</td>
                </tr>
            @endif
        </tbody>
    </table>

</div>

</body>
</html>
@endsection
