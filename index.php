<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Posisi Tengah dengan Icon Mata Password</title>
  <!-- Load Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Load Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    /* CSS untuk posisi form di tengah */
    /* .centered-form {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    } */
    /* CSS untuk ikon mata */
    .password-toggle {
      cursor: pointer;
      pointer-events: auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row min-vh-100 justify-content-center align-items-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">L O G I N</h2>
        <form>
          <div class="mb-3">
            <label for="username" class="form-label">Usrname</label>
            <input type="text" class="form-control" id="username" placeholder="Input Username">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="password" placeholder="Password">
              <span class="input-group-text password-toggle"><i class="fas fa-eye"></i></span>
            </div>
          </div>
          <div class="mb-3 d-flex justify-content-center">
            <button type="submit" name="login" class="btn btn-primary">L O G I N</button>
          </div>
          <div class="mb-3 d-flex justify-content-center">
            <button type="submit" name="register" class="btn btn-primary">R e g i s t e r</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Load Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Load Font Awesome for icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <script>
    // JavaScript untuk menampilkan atau menyembunyikan kata sandi
    const passwordInput = document.getElementById('exampleInputPassword');
    const passwordToggle = document.querySelector('.password-toggle');

    passwordToggle.addEventListener('click', function() {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      this.querySelector('i').classList.toggle('fa-eye-slash');
    });
  </script>
</body>
</html>
