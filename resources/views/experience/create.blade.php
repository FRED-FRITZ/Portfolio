<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Experience</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12">
            <h2>Create Experience</h2>
            <hr>
        </div>
    </div>

    <form action="{{ route('experiences.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date"> Date</label>
                <input type="date" name="date" class="form-control" id="date" placeholder="Date">
            </div>
            <div class="form-group col-md-6">
                <label for="job_title">Job Title</label>
                <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Job Title">
            </div>
            <div class="form-group col-md-6">
                <label for="company">Company</label>
                <input type="text" name="company" class="form-control" id="company" placeholder="Company">
            </div>
            <div class="form-group col-md-6">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Description">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
