

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
    on: {
        click(event) {
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
document.querySelector(".menu-toggle").addEventListener("click", function () {
    document.querySelector(".nav-links").classList.add("hide-nav-links");
});





// gallery page codes

$('#toggle').click(function () {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
});

// gallery page codes

function ecrintWeb() {
    window.open("#", "_blank", "noopener,noreferrer");
}

// admin login function start here 

function adminLogin() {


    // alert("ok");
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var check = document.getElementById("check").checked;

    var form = new FormData();

    form.append("em", email);
    form.append("pw", password);
    form.append("che", check);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {

            if (request.responseText == "success") {
                window.location = "adminPanel.php";
            }

        }
    }

    request.open("POST", "adminSignInPro.php", true);
    request.send(form);

}

//admin login function end here 

// admin forgot password function starts here

 var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));

function sendAdminMailCode() {

    var email = document.getElementById("email").value.trim();

    // alert(email)
    f = new FormData();
    f.append("email", email);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {

                showToast("Please check your mail for Verification Code , Thank you !", "info");

               
                myModal.show();

            } else {
                alert(t);
            }



        }
    }
    r.open("POST", "sendAdimVerifyCode.php", true);
    r.send(f);
}

function updateAdminPassword(){

    var email = document.getElementById("email").value.trim();
    var npw = document.getElementById("newPw").value.trim();
    var otp = document.getElementById("otp").value.trim();

    // alert(email)
    f = new FormData();
    f.append("email", email);
    f.append("npw", npw);
    f.append("otp", otp);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {

                showToast(" New Password Updated !", "info");
                //  var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
                myModal.hide();

            } else {
                alert(t);
            }



        }
    }
    r.open("POST", "updateAdimPassword.php", true);
    r.send(f);


}



function showToast(message, type) {
    let bgColor = {
        success: "#28a745",
        error: "#dc3545",
        warning: "#ffc107",
        info: "#007bff"
    }[type] || "#343a40";

    Toastify({
        text: message,
        duration: 4000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: bgColor,
        stopOnFocus: true,
    }).showToast();
}

// admin forgot password function end here



// functions of admin panel start hrom here 

function updateStuCount() {

    var stuCount = document.getElementById("student_count");

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {

            if (request.responseText == "1") {
                alert("Student Count Updated");
                stuCount.value = " ";
            } else {
                alert(request.responseText);
            }

        }
    }

    request.open("GET", "homepageData.php?stuCount=" + stuCount.value, true);
    request.send();



}

function updateTeaCount() {

    var teaCount = document.getElementById("teacher_count");

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {

            if (request.responseText == "2") {
                alert("Teacher Count Updated");
                teaCount.value = " ";
            } else {
                alert(request.responseText);
            }
        }

    }

    request.open("GET", "homepageData.php?teaCount=" + teaCount.value, true);
    request.send();



}
function updateOLCount() {

    var olCount = document.getElementById("OL_count");

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {

            if (request.responseText == "3") {
                alert("O/L student count updated");
                olCount.value = " ";
            } else {
                alert(request.responseText);
            }
        }

    }

    request.open("GET", "homepageData.php?olCount=" + olCount.value, true);
    request.send();



}
function updateUniCount() {

    var uniCount = document.getElementById("UNI_count");

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {

            if (request.responseText == "4") {
                alert("University Count Updated");
                uniCount.value = " ";
            } else {
                alert(request.responseText);
            }
        }

    }

    request.open("GET", "homepageData.php?uniCount=" + uniCount.value, true);
    request.send();



}


function updateMessage() {

    var message = document.getElementById("principalMsgTextarea");

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {

            if (request.responseText == "5") {
                alert("Principle Message Updated");
                message.value = " ";
            } else {
                alert(request.responseText);
            }
        }

    }

    request.open("GET", "homepageData.php?message=" + message.value, true);
    request.send();



}


// news section functions starts from here 

// function publishNews() {
//     var nTitle = document.getElementById("newsTitle").value;
//     var description = document.getElementById("newsDescription").value;
//     var date = document.getElementById("newsDate").value;
//     var images = document.getElementById("file");

//     const files = images.files;
//     const minwidth = 1100;
//     const minheight = 800;

//     if (!files.length) {
//     alert("Please select some images.");
//     return;
//   }

//   Array.from(files).forEach((file, index) => {
//     const img = new Image();
//     const objectUrl = URL.createObjectURL(file);

//     img.onload = function () {
//       const width = img.naturalWidth;
//       const height = img.naturalHeight;

//       console.log(`Image ${index + 1}: ${width} x ${height}`);

//       if (width < minwidth || height < minheight) {
//         alert(`Image "${file.name}" exceeds size limit (${maxWidth}x${maxHeight}).`);
//       }

//       URL.revokeObjectURL(objectUrl); // Clean up
//     };

//     img.onerror = function () {
//       alert(`Could not load image: ${file.name}`);
//       URL.revokeObjectURL(objectUrl);
//     };

//     img.src = objectUrl;
//   });



//     var request = new XMLHttpRequest();

//     var form = new FormData();

//     form.append("ntitle", nTitle);
//     form.append("ndesc", description);
//     form.append("ndate", date);

//     request.onreadystatechange = function () {
//         if (request.readyState == 4) {

//             if (request.responseText == "5") {
//                 alert("Principle Message Updated");
//                 message.value = " ";
//             } else {
//                 alert(request.responseText);
//             }
//         }

//     }

//     request.open("POST", "addEvents.php", true);
//     request.send(form);



// }


function loadImg() {

    const imageInput = document.getElementById("newsImg");

    if (!imageInput.dataset.listenerAdded) {
        imageInput.addEventListener("change", function (event) {
            const files = event.target.files;
            const previewContainer = document.getElementById("img_container");
            const minWidth = 500;
            const minHeight = 500;

            previewContainer.innerHTML = ""; // Clear old previews

            if (files.length == 0) {
                alert("Please select 1 Image(600x600).");
                return;
            }

            Array.from(files).forEach((file, index) => {
                if (file.type.startsWith("image/")) {
                    const objectUrl = URL.createObjectURL(file);
                    const imgForSizeCheck = new Image();

                    imgForSizeCheck.onload = function () {
                        const width = imgForSizeCheck.naturalWidth;
                        const height = imgForSizeCheck.naturalHeight;

                        console.log(`Image ${index + 1}: ${width} x ${height}`);

                        if (width < minWidth || height < minHeight) {
                            alert(`"${file.name}" is too small. Minimum is ${minWidth}x${minHeight}px.`);
                            document.getElementById("ndivHide").classList.remove("d-none");
                        } else {
                            // Only show preview if dimensions are OK
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const img = document.createElement("img");
                                img.src = e.target.result;
                                img.style.maxWidth = "100px";
                                img.style.maxHeight = "100px";
                                img.style.margin = "5px";
                                previewContainer.appendChild(img);
                                document.getElementById("ndivHide").classList.add("d-none");
                            };
                            reader.readAsDataURL(file);
                        }

                        URL.revokeObjectURL(objectUrl); // Clean up
                    };

                    imgForSizeCheck.onerror = function () {
                        alert(`Failed to load: ${file.name}`);
                        URL.revokeObjectURL(objectUrl);
                    };

                    imgForSizeCheck.src = objectUrl;
                }
            });


        });

        imageInput.dataset.listenerAdded = "true"; // Prevent double binding
    }

}

function reset() {

    document.getElementById("myform").reset();
    document.getElementById("divHide").classList.remove("d-none");

}

function publishNews(id) {

    const nTitle = document.getElementById("newsTitle").value;
    const description = document.getElementById("newsDescription").value;
    const date = document.getElementById("newsDate").value;
    const images = document.getElementById("newsImg");


    const request = new XMLHttpRequest();
    const form = new FormData();

    form.append("ntitle", nTitle);
    form.append("ndesc", description);
    form.append("ndate", date);
    form.append("id", id);
    form.append("nimage", images.files[0]);

    // alert(images.files.length);

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;


            if (response == "success1") {
                alert("News published");
                window.location.reload();
            } else if (response == "success2") {
                alert("News saved");
                window.location.reload();
            } else {
                alert(response);
            }


        }
    };

    request.open("POST", "addNews.php", true);
    request.send(form);

}

function deleteNews(nid) {

    if (confirm("Confirm that you delete selected news !")) {
        const request = new XMLHttpRequest();

        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {

                var response = request.responseText;


                if (response == "success1") {
                    alert("News Deleted !");
                    window.location.reload();
                } else {
                    alert(response);
                }


            }
        };

        request.open("GET", "deleteNews.php?nid=" + nid, true);
        request.send();
    }



}

var pbn;

function showNewsUpdateModel(button) {

    const json = button.getAttribute("data-news");
    const news = JSON.parse(json);

    document.getElementById("news_id").value = news.news_id;
    document.getElementById("newsuTitle").value = news.title;
    document.getElementById("newsuDescription").value = news.description;
    document.getElementById("newsuDate").value = news.date;
    document.getElementById("upimg").src = news.img;

    var nm = document.getElementById("newsUpdateModal");
    pbn = new bootstrap.Modal(nm);
    pbn.show();

}

function loadUpImg() {

    const imageInput = document.getElementById("newImg");

    if (!imageInput.dataset.listenerAdded) {
        imageInput.addEventListener("change", function (event) {
            const files = event.target.files;
            const previewContainer = document.getElementById("updateImgContainer");
            const upImg = document.getElementById("upimg");
            const minWidth = 500;
            const minHeight = 500;

            previewContainer.innerHTML = ""; // Clear old previews

            if (files.length != 1) {
                alert("Please select 1 Image(600x600).");
                return;
            }

            Array.from(files).forEach((file, index) => {
                if (file.type.startsWith("image/")) {
                    const objectUrl = URL.createObjectURL(file);
                    const imgForSizeCheck = new Image();

                    imgForSizeCheck.onload = function () {
                        const width = imgForSizeCheck.naturalWidth;
                        const height = imgForSizeCheck.naturalHeight;

                        console.log(`Image ${index + 1}: ${width} x ${height}`);

                        if (width < minWidth || height < minHeight) {

                            alert(`"${file.name}" is too small. Minimum is ${minWidth}x${minHeight}px.`);
                            upImg.classList.remove("d-none");
                        } else {
                            // Only show preview if dimensions are OK
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const img = document.createElement("img");
                                img.src = e.target.result;
                                img.style.maxHeight = "150px";
                                img.style.margin = "5px";
                                previewContainer.appendChild(img);
                                upImg.classList.add("d-none");
                            };
                            reader.readAsDataURL(file);
                        }

                        URL.revokeObjectURL(objectUrl); // Clean up
                    };

                    imgForSizeCheck.onerror = function () {
                        alert(`Failed to load: ${file.name}`);
                        URL.revokeObjectURL(objectUrl);
                    };

                    imgForSizeCheck.src = objectUrl;
                }
            });


        });

        imageInput.dataset.listenerAdded = "true"; // Prevent double binding
    }

}

function updateNews(sid) {

    const nId = document.getElementById("news_id").value;
    const nTitle = document.getElementById("newsuTitle").value;
    const nDesc = document.getElementById("newsuDescription").value;
    const nDate = document.getElementById("newsuDate").value;
    const nImage = document.getElementById("newImg");


    var f = new FormData();
    f.append("nid", nId);
    f.append("ntitle", nTitle);
    f.append("ndesc", nDesc);
    f.append("ndate", nDate);
    f.append("sid", sid);

    if (nImage.files.length == 0) {

        var confirming = confirm("You don't want to Update News Images.Go ahead");

        if (confirming) {
            alert("You haven't select any image");
        }

    } else {

        f.append("img", nImage.files[0]);
    }


    const request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {

            var response = request.responseText;
            if (response == "success") {
                alert("News Updated !");
                window.location.reload();
            } else {
                alert(response);
            }

        }

    }

    request.open("POST", "updateNews.php", true);
    request.send(f);



}



function previewEventImages() {
    const imageInput = document.getElementById("eventImage");

    if (!imageInput.dataset.listenerAdded) {
        imageInput.addEventListener("change", function (event) {
            const files = event.target.files;
            const previewContainer = document.getElementById("previewContainer");
            const minWidth = 500;
            const minHeight = 500;

            previewContainer.innerHTML = ""; // Clear old previews

            if (files.length == 0) {
                alert("Please select images (600x600).");
                return;
            }

            Array.from(files).forEach((file, index) => {
                if (file.type.startsWith("image/")) {
                    const objectUrl = URL.createObjectURL(file);
                    const imgForSizeCheck = new Image();

                    imgForSizeCheck.onload = function () {
                        const width = imgForSizeCheck.naturalWidth;
                        const height = imgForSizeCheck.naturalHeight;

                        console.log(`Image ${index + 1}: ${width} x ${height}`);

                        if (width < minWidth || height < minHeight) {
                            alert(`"${file.name}" is too small. Minimum is ${minWidth}x${minHeight}px.`);
                        } else {
                            // Only show preview if dimensions are OK
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const img = document.createElement("img");
                                img.src = e.target.result;
                                img.style.maxWidth = "100px";
                                img.style.maxHeight = "100px";
                                img.style.margin = "5px";
                                previewContainer.appendChild(img);
                                document.getElementById("edivHide").classList.add("d-none");
                            };
                            reader.readAsDataURL(file);
                        }

                        URL.revokeObjectURL(objectUrl); // Clean up
                    };

                    imgForSizeCheck.onerror = function () {
                        alert(`Failed to load: ${file.name}`);
                        URL.revokeObjectURL(objectUrl);
                    };

                    imgForSizeCheck.src = objectUrl;
                }
            });


        });

        imageInput.dataset.listenerAdded = "true"; // Prevent double binding
    }


}

function addEvent(sid) {

    const eTitle = document.getElementById("eventTitle").value;
    const eDesc = document.getElementById("eventDescription").value;
    const eDate = document.getElementById("eventDate").value;
    const eTime = document.getElementById("eventTime").value;
    const ePlace = document.getElementById("eventLocation").value;
    const eState = document.getElementById("eventState").value;
    const eLinks = document.getElementById("eventLinks").value;
    const eimg = document.getElementById("eventImage");


    var f = new FormData();
    f.append(`etitle`, eTitle);
    f.append(`eDesc`, eDesc);
    f.append(`eDate`, eDate);
    f.append(`eTime`, eTime);
    f.append(`ePlace`, ePlace);
    f.append(`eState`, eState);
    f.append(`eLinks`, eLinks);
    f.append(`sid`, sid);

    var img_num = eimg.files.length;

    for (var p = 0; p < img_num; p++) {
        f.append("img" + p, eimg.files[p]);
    }

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success1") {
                alert("Event Publised");
                window.location.reload();
            } else if (t == "success2") {
                alert("Event Saved");
                window.location.reload();
            } else {
                alert(t);
            }
        }
    }
    r.open("POST", "addNewEvent.php", true);
    r.send(f);


}

function sendEvtIdUpdate(eid) {

    // const currentUrl = window.location.origin + window.location.pathname;
    const newUrl = "updateEventPage.php?eid=" + eid;
    window.location = newUrl;
    // // Update the URL without reload
    // history.pushState(null, "", newUrl);




}


function previewUEventImages() {
    const imageInput = document.getElementById("eventUImage");

    if (!imageInput.dataset.listenerAdded) {
        imageInput.addEventListener("change", function (event) {
            const files = event.target.files;
            const previewContainer = document.getElementById("previewUContainer");
            const minWidth = 500;
            const minHeight = 500;

            previewContainer.innerHTML = ""; // Clear old previews

            if (files.length == 0) {
                alert("Please select images (600x600).");
                document.getElementById("eUdivHide").classList.remove("d-none");

                return;
            }

            Array.from(files).forEach((file, index) => {
                if (file.type.startsWith("image/")) {
                    const objectUrl = URL.createObjectURL(file);
                    const imgForSizeCheck = new Image();

                    imgForSizeCheck.onload = function () {
                        const width = imgForSizeCheck.naturalWidth;
                        const height = imgForSizeCheck.naturalHeight;

                        console.log(`Image ${index + 1}: ${width} x ${height}`);

                        if (width < minWidth || height < minHeight) {
                            alert(`"${file.name}" is too small. Minimum is ${minWidth}x${minHeight}px.`);
                            document.getElementById("eUdivHide").classList.remove("d-none");
                        } else {
                            // Only show preview if dimensions are OK
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const img = document.createElement("img");
                                img.src = e.target.result;
                                img.style.maxWidth = "100px";
                                img.style.maxHeight = "100px";
                                img.style.margin = "5px";
                                previewContainer.appendChild(img);
                                document.getElementById("eUdivHide").classList.add("d-none");
                            };
                            reader.readAsDataURL(file);
                        }

                        URL.revokeObjectURL(objectUrl); // Clean up
                    };

                    imgForSizeCheck.onerror = function () {
                        alert(`Failed to load: ${file.name}`);
                        URL.revokeObjectURL(objectUrl);
                    };

                    imgForSizeCheck.src = objectUrl;
                }
            });


        });

        imageInput.dataset.listenerAdded = "true"; // Prevent double binding
    }


}

function updateEvent(sid) {

    const eId = document.getElementById("event_Uid").value;
    const eTitle = document.getElementById("eventUTitle").value;
    const eDesc = document.getElementById("eventUDescription").value;
    const eDate = document.getElementById("eventUDate").value;
    const eTime = document.getElementById("eventUTime").value;
    const ePlace = document.getElementById("eventULocation").value;
    const eLinks = document.getElementById("eventULinks").value;
    const eState = document.getElementById("eventUState").value;
    const eimg = document.getElementById("eventUImage");

    var f = new FormData();
    f.append(`eid`, eId);
    f.append(`eTitle`, eTitle);
    f.append(`eDesc`, eDesc);
    f.append(`eDate`, eDate);
    f.append(`eTime`, eTime);
    f.append(`ePlace`, ePlace);
    f.append(`eLinks`, eLinks);
    f.append(`eState`, eState);
    f.append(`sid`, sid);

    var img_num = eimg.files.length;

    if (img_num == 0) {

        var confirming = confirm("You don't want to Update Event Images. Go ahead");

        if (confirming) {
            alert("You haven't select any image");
        }

    } else {

        for (var p = 0; p < img_num; p++) {
            f.append("img" + p, eimg.files[p]);
        }
    }


    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {
                alert("Event Updated !");
                window.location.reload();
            } else {
                alert(t);
            }

        }
    }
    r.open("POST", "updateEvent.php", true);
    r.send(f);



}


function deleteEvent(eid) {

    if (confirm("Confirm that you delete selected Event !")) {
        const request = new XMLHttpRequest();

        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {

                var response = request.responseText;


                if (response == "success") {
                    alert("Event Deleted !");
                    window.location.reload();

                } else {
                    alert(response);
                }


            }
        };

        request.open("GET", "deleteEvent.php?eid=" + eid, true);
        request.send();
    }



}

function searchNews() {

    var sort = document.getElementById("sortNews").value;
    var search = document.getElementById("newsSearch").value;

    var req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if (req.readyState == 4) {

            document.getElementById("newsResult").innerHTML = req.responseText;

        }
    }

    req.open("GET", "newsSearch.php?st=" + sort + "&search=" + search, true);
    req.send();

}
function searchEvents() {

    var sort = document.getElementById("sortEvents").value;
    var search = document.getElementById("eventSearch").value;

    var req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        if (req.readyState == 4) {

            document.getElementById("eventResult").innerHTML = req.responseText;

        }
    }

    req.open("GET", "eventSearch.php?st=" + sort + "&search=" + search, true);
    req.send();

}


// end of admin panel functions 


// home page (index.php) news viewing fuction start here 

function sendNewsId(nid) {

    window.location = "newsViewPage.php?nid=" + nid;


}

// home page (index.php) news viewing fuction end here 


// home page and event page event viewing function starts here 



function sendEvtIdUpcoming(eid) {

    window.location = "upcomingEventPage.php?eid=" + eid;

}

function sendEvtId(eid) {

    window.location = "eventViewPage.php?eid=" + eid;

}



// home page and event page event viewing function end here 