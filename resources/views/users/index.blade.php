@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 10 CRUD Tutorial From Scratch</title>

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
                                <h2>List users</h2>
                            </div>
                            <div class="pull-right mb-2">
                                <a href="{{ route('users.create') }}" class="btn btn-primary">Add users</a>
                            </div>
                        </div>
                    </div>

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($users->count() > 0)
                                @foreach($users as $rs)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rs->name }}</td>
                                        <td>{{ $rs->email }}</td>
                                        <td>
                                            @if($rs->role == 'admin')
                                            <div class="badge badge-success">Admin</div>
                                            @else
                                            <div class="badge badge-primary">Spectator</div>
                                            @endif
                                        </td>
                                        @if($rs->avatar)
                                        <td>
                                            <img src="{{ asset('storage/' . $rs->avatar) }}" alt="avatar" style="width: 40px; height:40px;" class="img-profile rounded-box">
                                        </td>
                                        @else
                                        <td>
                                            <img src="{{ asset('assets/img/user.png') }}" alt="avatar" style="width: 40px; height:40px;" class="img-profile rounded-box">
                                        </td>
                                        @endif
                                        <td>
                                            <a href="{{ route('users.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>

                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <form action="{{ route('users.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')">
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
                                    <td colspan="6" class="text-center">Users not found</td>
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
