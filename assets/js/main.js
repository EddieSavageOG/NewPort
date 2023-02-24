unhide();

function unhide() {
      var x = document.getElementById("mobile-nav");
      if (x.style.display === "none") {
            x.style.display = "block";
      } else {
            x.style.display = "none";
      }
  }
