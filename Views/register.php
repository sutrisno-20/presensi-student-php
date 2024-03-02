<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .letter-spacing {
        letter-spacing : 5px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row min-vh-100 align-items-center justify-content-center">
        <div class="col-md-6">
          <h2 class="text-center letter-spacing">REGISTER</h2>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nis" class="form-label">NIS</label>
              <input type="text" name="nis" class="form-control" id="nis">
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="file" name="upload_file" class="form-control" id="image">
            </div>
            <button type="submit" name="register" class="btn btn-primary letter-spacing">Register</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>