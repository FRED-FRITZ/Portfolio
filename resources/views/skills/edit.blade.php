<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skills</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>


    <div class="container mt-2">

        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Skills</h2>
                <hr>
            </div>
        </div>

        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('skills.update', $skills->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="skills_name">Skills Name</label>
                    <input type="text" name="skills_name" class="form-control" id="skills_name" placeholder="Skills Name" value="{{ $skills->skills_name }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="skills_percent">Skills Percent</label>
                    <input type="text" name="skills_percent" class="form-control" id="skills_percent" placeholder="Skills Percent" value="{{ $skills->skills_percent }}" >
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
