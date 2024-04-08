<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Educational</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>


    <div class="container mt-2">

        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Educational</h2>
                <hr>
            </div>
        </div>

        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('educationals.update', $educationals->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="year_graduated">Year Graduated</label>
                    <input type="text" name="year_graduated" class="form-control" id="year_graduated" placeholder="Year Graduated" value="{{ $educationals->year_graduated }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="school_type">School Type</label>
                    <input type="text" name="school_type" class="form-control" id="school_type" placeholder="School Type" value="{{ $educationals->school_type }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="school_name">School Name</label>
                    <input type="text" name="school_name" class="form-control" id="school_name" placeholder="School Name" value="{{ $educationals->school_name }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{ $educationals->description }}" >
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
