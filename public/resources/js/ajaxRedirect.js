const toggleSignUpLogin = document.querySelector("#toggle-sign-in-up");

toggleSignUpLogin.addEventListener("click", () => {
  hasChecked = toggleSignUpLogin.hasAttribute("checked");
  redirectLocation = hasChecked ? "/signup" : "/login";
  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", redirectLocation, true);

  // Set the request header
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onreadystatechange = function () {
    if (this.status >= 200 && this.status <= 299) {
      window.location.href = redirectLocation;
    }
  };
  xhttp.send();
});
