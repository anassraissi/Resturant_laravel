<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<!-- <header> Menu will be here</header> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Resto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    @yield('content')
</div>
<!-- <footer>Copy right reserved by anass</footer> -->
</body>
</html>