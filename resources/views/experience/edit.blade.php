<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Experience</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>


    <div class="container mt-2">

        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Experience</h2>
                <hr>
            </div>
        </div>

        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('experiences.update', $experiences->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="text" name="date" class="form-control" id="date" placeholder="Date" value="{{ $experiences->date }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="job_title">Job Title</label>
                    <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Job Title" value="{{ $experiences->job_title }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="company">Company</label>
                    <input type="text" name="company" class="form-control" id="company" placeholder="Company" value="{{ $experiences->company }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{ $experiences->description }}" >
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
