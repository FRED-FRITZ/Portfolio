<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webinar</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>


    <div class="container mt-2">

        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Webinar</h2>
                <hr>
            </div>
        </div>

        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('webinar.update', $webinar->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="certificate">Certificate</label>
                    <input type="certificate" name="certificate" class="form-control" id="certificate" placeholder="Certificate" value="{{ $webinar->certificate }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="agenda">Agenda</label>
                    <input type="text" name="agenda" class="form-control" id="agenda" placeholder="Agenda" value="{{ $webinar->certificate }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="host_name">Host Name</label>
                    <input type="text" name="host_name" class="form-control" id="host_name" placeholder="Host Name" value="{{ $webinar->host_name }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control" id="date" placeholder="Date" value="{{ $webinar->date }}" >
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
