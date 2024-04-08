<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Webinar</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12">
            <h2>Add Webinar</h2>
            <hr>
        </div>
    </div>

    <form action="{{ route('webinars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="certificate">Certificate</label>
                <input type="file" name="certificate" class="form-control" id="certificate" placeholder="Certificate">
            </div>
            <div class="form-group col-md-6">
                <label for="agenda">Agenda</label>
                <input type="text" name="agenda" class="form-control" id="agenda" placeholder="Agenda">
            </div>
            <div class="form-group col-md-6">
                <label for="host_name">Host Name</label>
                <input type="text" name="host_name" class="form-control" id="host_name" placeholder="Host Name">
            </div>
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" id="date" placeholder="Date">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
