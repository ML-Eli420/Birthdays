function PopUp(text) {
  let popup = document.createElement("div");
  popup.id = "popup";
  popup.innerHTML = `
    <div id="popup-content">
      <span id="close-button">&times;</span>
      <p>${text}</p>
    </div>
  `;

  let closeButton = popup.querySelector("#close-button");
  closeButton.addEventListener("click", function() {
    popup.remove();
  });

  popup.addEventListener("click", function(event) {
    if (event.target === popup) {
      popup.remove();
    }
  });

  document.body.appendChild(popup);
}

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
        PopUp("Incorrect username or password");
      }
    })
    .catch(error => console.error(error));
});
