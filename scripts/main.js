/* Small shared interface behaviours. No sensor or device logic belongs here yet. */
(function () {
  const themeKey = "iot-monitor-theme";
  const body = document.body;
  const toggle = document.querySelector("[data-theme-toggle]");

  if (localStorage.getItem(themeKey) === "dark") {
    body.classList.add("dark-theme");
  }

  if (toggle) {
    toggle.addEventListener("click", function () {
      body.classList.toggle("dark-theme");
      localStorage.setItem(
        themeKey,
        body.classList.contains("dark-theme") ? "dark" : "light"
      );
    });
  }
})();

function validatePassword() {
  const password = document.getElementById("password").value;
  const confirmation = document.getElementById("confirm_password").value;

  if (password !== confirmation) {
    alert("Passwords do not match");
    return false;
  }

  return true;
}
