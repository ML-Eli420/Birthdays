<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Family</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled(Login To Use)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled(Login To Use)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled(Login To Use)</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container my-5">
      <<form id="login-form" action="login.php" method="post">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  </div>
  <button type="submit">Submit</button>
</form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
      const form = document.getElementById("login-form");

form.addEventListener("submit", function(event) {
  event.preventDefault();

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  if (password === "a7b5h9") {
    window.location.href = "LoggedIn.php";
  }
});

    </script>
  </body>
</html>