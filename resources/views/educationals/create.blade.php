<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Educational</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12">
            <h2>Create Educational</h2>
            <hr>
        </div>
    </div>

    <form action="{{ route('educationals.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="year_graduated">Year Graduated</label>
                <input type="number" name="year_graduated" class="form-control" id="year_graduated" placeholder="Year Graduated">
            </div>
            <div class="form-group col-md-6">
                <label for="school_type">School Type</label>
                <input type="text" name="school_type" class="form-control" id="school_type" placeholder="School Type">
            </div>
            <div class="form-group col-md-6">
                <label for="school_name">School Name</label>
                <input type="text" name="school_name" class="form-control" id="school_name" placeholder="School Name">
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
