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
                <h2>Edit About</h2>
                <hr>
            </div>
        </div>

        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('about.update', $about->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $about->name }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="job">Job</label>
                    <input type="text" name="job" class="form-control" id="job" placeholder="Job" value="{{ $about->job }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{ $about->description }}" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="from">From</label>
                    <input type="text" name="from" class="form-control" id="from" placeholder="From" value="{{ $about->from }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="lives_in">Lives In</label>
                    <input type="text" name="lives_in" class="form-control" id="lives_in" placeholder="Lives In" value="{{ $about->lives_in }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="birthday">Birthday</label>
                    <input type="date" name="birthday" class="form-control" id="birthday" placeholder="Birthday" value="{{ $about->birthday }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="age">Age</label>
                    <input type="number" name="age" class="form-control" id="age" placeholder="Age" value="{{ $about->age }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" class="form-control" id="gender" placeholder="Gender" value="{{ $about->gender }}" >
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
