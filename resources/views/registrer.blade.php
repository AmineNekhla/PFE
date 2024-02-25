<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Registrer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
    
</head>
  <body>
    <div class="row justify-content-center mt-5">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title">Registrer</h1>
          </div>
          <div class="card-body">
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif

            <ul>
              @foreach($errors->all() as $error)
                <li class="alert alert-danger">
                  {{$error}}
                </li>
              @endforeach
            </ul>

            <form action="/registrer" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="nom..." required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email addresse</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="nom@example.com" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Mot De Passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe..."  required>
              </div>
              <div class="mb-3">
                <div class="d-grid">
                  <button class="btn btn-primary">Register</button>
                </div>
              </div>

              <div class="mb-3">
                <div class="d-grid">
                  <a href="{{ route('login') }}" class="btn btn-primary">connexion</a>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- Image goes here -->
        <img src="https://i.pinimg.com/474x/20/21/35/20213585795b1d232af28c9106038247.jpg" alt="Your Image" class="img-fluid">
      </div>
    </div>
  </body>
</html>
