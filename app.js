document.getElementById("login-form").addEventListener("submit", function (event) {
  event.preventDefault();
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  fetch("dssawrop.txt")
    .then(response => {
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      return response.text();
    })
    .then(text => {
      if (password === text) {
        localStorage.setItem("authenticated", true);
        window.location.href = "LoggedIn.html";
      } else {
        Swal.fire({
          title: 'Error!',
          text: 'Incorrect Username or Password',
          icon: 'error',
          confirmButtonText: '     Ok     '
      })
      }
    })
    .catch(error => console.error(error));
});