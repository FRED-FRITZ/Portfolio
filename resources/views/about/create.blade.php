<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create About</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12">
            <h2>Create About</h2>
            <hr>
        </div>
    </div>

    <form action="{{ route('educationals.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
                <label for="job">Job</label>
                <input type="text" name="job" class="form-control" id="job" placeholder="Job">
            </div>
            <div class="form-group col-md-6">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Description">
            </div>
            <div class="form-group col-md-6">
                <label for="from">From</label>
                <input type="text" name="from" class="form-control" id="from" placeholder="From">
            </div>
            <div class="form-group col-md-6">
                <label for="lives_in">Lives In</label>
                <input type="text" name="lives_in" class="form-control" id="lives_in" placeholder="Lives In">
            </div>
            <div class="form-group col-md-6">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="Age">
            </div>
            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <input type="text" name="gender" class="form-control" id="gender" placeholder="Gender">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
