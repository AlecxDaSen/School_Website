

// slide_!

var swiper = new Swiper(".swiper", {

    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    initialSlide: 4,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    loop: true,
    speed: 600,
    preventclicks: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 80,
        depth: 350,
        modifier: 1,
        slideShadows: true,
    },
    on:{
        click(event){
            swiper.slideTo(event.clickedIndex);

        },
    },
    pagination: {
        el: ".swiper-pagination",
    },
    


});

// Wait for the entire page to load
window.addEventListener('load', () => {
    // Select the loader
    const loader = document.getElementById('page-loader');
    
    // Ensure the loader exists in the DOM
    if (loader) {
        // Fade out the loader
        loader.style.opacity = '0';
        
        // Wait for the fade-out animation to complete before hiding
        setTimeout(() => {
            loader.style.display = 'none';
        }, 500); // Match this duration to the CSS transition time
    } else {
        console.error('Loader element not found.');
    }

    // Initialize the Lottie animation
    const lottieLogo = document.getElementById('lottie-logo');
    if (lottieLogo) {
        lottie.loadAnimation({
            container: lottieLogo, // Container for the animation
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'path-to-lottie-file.json', // Replace with the actual path to your Lottie JSON
        });
    } else {
        console.error('Lottie logo container not found.');
    }
});





  // Open Sidebar and hide nav links on mobile
  function openSidebar() {
      document.getElementById("sidebar").classList.add("open");
      document.querySelector(".nav-links").classList.add("hide-nav-links");
  }

  // Close Sidebar and show nav links again
  function closeSidebar() {
      document.getElementById("sidebar").classList.remove("open");
      document.querySelector(".nav-links").classList.remove("hide-nav-links");
  }

  // Toggle nav links visibility when hamburger is clicked
  document.querySelector(".menu-toggle").addEventListener("click", function() {
      document.querySelector(".nav-links").classList.add("hide-nav-links");
  });
  




// gallery page codes

$('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
   });

// gallery page codes

function ecrintWeb(){
    window.open("#", "_blank", "noopener,noreferrer");
}


function adminLogin(){
    window.location = "adminPanel.php";
}


function addClub(){
    var active = document.getElementById("activeSwitch_" + club_id).checked ? "1" : "2";
    var name = document.getElementById("clubName").value.trim();
    var description = document.getElementById("clubDescription").value.trim();
    var logo = document.getElementById("clubLogo");
    var image = document.getElementById("clubimage");

    var f = new FormData();
    f.append("name", name); // Use .value here
    f.append("description", description); // Use .value here
    f.append("is_active", active);

    // Logo upload (optional)
    if (logo.files.length > 0) {
        f.append("logo", logo.files[0]);
    } else {
        if (!confirm("Are you sure you don't want to upload a logo?")) return;
    }

    // Image upload (optional)
    if (image.files.length > 0) {
        f.append("image", image.files[0]);
    } else {
        if (!confirm("Are you sure you don't want to upload an image?")) return;
    }

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                alert("Club added successfully.");
                window.location.reload();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "addClub.php", true);
    r.send(f);
}

function updateClub(clubId) {
    var name = document.getElementById("title_" + clubId).value.trim();
    var description = document.getElementById("description_" + clubId).value.trim();
    var logo = document.getElementById("clubLogo_" + clubId);
    var images = document.getElementById("clubImages_" + clubId);
    var isActive = document.getElementById("activeSwitch_" + clubId).checked ? 1 : 2;

    if (!name || !description) {
        alert("Please fill in all required fields.");
        return;
    }

    var f = new FormData();
    f.append("id", clubId);
    f.append("name", name);
    f.append("description", description);
    f.append("is_active", isActive);

    if (logo.files.length > 0) {
        f.append("logo", logo.files[0]);
    }

    if (images.files.length > 0) {
        for (var i = 0; i < images.files.length; i++) {
            f.append("images[]", images.files[i]);
        }
    }

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState === 4) {
            var res = r.responseText.trim();
            if (res === "success") {
                alert("Club updated successfully.");
                window.location.reload(); // Or close modal manually if you want
            } else {
                alert(res);
            }
        }
    };

    r.open("POST", "updateClub.php", true);
    r.send(f);
}


 function submitSummary() {
    const form = document.getElementById("aboutForm");
    const summary = document.getElementById("historySum").value.trim();

    if (summary === "") {
      alert("Please enter the history summary.");
      return;
    }

    // Set the button name to simulate which submit triggered it
    const input = document.createElement("input");
    input.type = "hidden";
    input.name = "update_summary";
    input.value = "1";
    form.appendChild(input);
    form.submit();
  }

  function submitHistory() {
    const form = document.getElementById("aboutForm");
    const history = document.getElementById("history").value.trim();

    if (history === "") {
      alert("Please enter the full history.");
      return;
    }

    const input = document.createElement("input");
    input.type = "hidden";
    input.name = "update_history";
    input.value = "1";
    form.appendChild(input);
    form.submit();
  }

  function submitPrincipal() {
    const form = document.getElementById("aboutForm");
    const name = document.getElementById("newPrincipalName").value.trim();
    const msg = document.getElementById("newPrincipalMsg").value.trim();
    const img = document.getElementById("newPrincipalImage").files.length;

    if (name === "" || msg === "" || img === 0) {
      alert("Please fill all principal fields.");
      return;
    }

    const input = document.createElement("input");
    input.type = "hidden";
    input.name = "add_principal";
    input.value = "1";
    form.appendChild(input);
    form.submit();
  }