<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
        <h1 class="mb-4">
            Export Report
        </h1>

        <form action="{{ route('file-import')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <a class="btn btn-success" href="{{ route('file-export') }}">Export as CSV</a>

        </form>
    </div>
</body>

</html>
