function toggleDarkMode() {
    const body = document.body;
    const darkModeButton = document.getElementById("dark-mode");
  
    if (body.classList.contains("darkmode")) {
        body.classList.remove("darkmode");
        body.classList.add("lightmode");
        darkModeButton.className = "fas fa-moon";
    } else {
        body.classList.remove("lightmode");
        body.classList.add("darkmode");
        darkModeButton.className = "fas fa-sun";
    }
  }
  
  function showPopup() {
    alert("Fitur segera datang nanti. Silakan kunjungi lagi.");
  }

  document.getElementById('burgerbar').addEventListener('click', showMenu);

