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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Links
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>-->
          <!-- Navbar text-->
          <span class="navbar-text">
            Admin
          </span>
      </nav>
    <div class="container mt-5 text-center">
        <h1 class="mb-4">
            Export Report
        </h1>

        <form action="{{ route('file-import')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <a class="btn btn-success" href="{{ route('file-export') }}">Export as CSV</a>
            {{--<a class="btn btn-success" href="{{ route('file-export') }}">Export as XLS</a>--}}

        </form>
    </div>
</body>

</html>
