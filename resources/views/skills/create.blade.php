<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Skills</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12">
            <h2>Add Skills</h2>
            <hr>
        </div>
    </div>

    <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="skills_name">Skills Name</label>
                <input type="text" name="skills_name" class="form-control" id="skills_name" placeholder="Skills Name">
            </div>
            <div class="form-group col-md-6">
                <label for="skills_percent">Skills Percent</label>
                <input type="text" name="skills_percent" class="form-control" id="skills_percent" placeholder="Skills Percent">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
