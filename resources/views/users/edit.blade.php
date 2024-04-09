<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 10 CRUD Tutorial From Scratch</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>


    <div class="container mt-2">

        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Users</h2>
                <hr>
            </div>
        </div>

        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('users.update', $users->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" value="{{ $users->name }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ $users->email }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="role">Role</label>
                    <input type="text" name="role" class="form-control" id="role" placeholder="Role" value="{{ $users->role }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" class="form-control" id="avatar" placeholder="avatar" value="{{ $users->avatar }}" >
                </div>
            </div>
            <div class="row">
                <div class="d-grid">
                    <button class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>
