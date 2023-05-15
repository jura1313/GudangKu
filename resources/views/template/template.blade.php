<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="shortcut icon" href="img/image2vector.svg" type="image/svg+xml">

    <title>{{ $title }}</title>
</head>
<body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">GudangKu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ ($title)==="Home" ? 'active':'' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title)==="Storage" ? 'active':'' }}" href="/show">Storage</a>
              </li>
            </ul>
            <form class="d-flex" role="search" method="POST" action="/search">
              <input type="search" name="search" id="search" placeholder="Search Something Here" class="form-control me-2" aria-label="Search">
            </form>
          </div>
        </div>
      </nav>

      @if (session('status_create'))
          <div class="alert alert-success">
              {{ session('status_create') }}
          </div>
      @elseif(session('status_update'))
          <div class="alert alert-primary">
              {{ session('status_update') }}
          </div>
      @elseif(session('status_delete'))
          <div class="alert alert-danger">
              {{ session('status_delete') }}
          </div>
      @endif

    @yield('content')


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>

</body>
</html>
