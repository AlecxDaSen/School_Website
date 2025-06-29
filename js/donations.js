function sendDonatorMail() {

    var fname = document.getElementById("firstName").value.trim();
    var lname = document.getElementById("lastName").value.trim();
    var email = document.getElementById("email").value.trim();
    var mobile = document.getElementById("mobile").value.trim();
    var amount = document.getElementById("amount").value.trim();
    var msg = document.getElementById("message").value.trim();

    var f = new FormData();
    f.append("fname", fname);
    f.append("lname", lname);
    f.append("email", email);
    f.append("mobile", mobile);
    f.append("amount", amount);
    f.append("msg", msg);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if(t == "success"){
                showToast("Please Check your Mail for donation details , Thank you","info");
            }

        }
    }
    r.open("POST","sendDonaterMail.php",true);
    r.send(f);

}

function payNow() {


    var fname = document.getElementById("firstName").value.trim();
    var lname = document.getElementById("lastName").value.trim();
    var email = document.getElementById("email").value.trim();
    var mobile = document.getElementById("mobile").value.trim();
    var amount = document.getElementById("amount").value.trim();
    var msg = document.getElementById("message").value.trim();

    // alert(fname);
    // alert(lname);
    // alert(email);
    // alert(mobile);
    // alert(amount);
    // alert(msg);

    var f = new FormData();
    f.append("fname", fname);
    f.append("lname", lname);
    f.append("email", email);
    f.append("mobile", mobile);
    f.append("amount", amount);
    f.append("msg", msg);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            try {

                var obj = JSON.parse(t);

                if (obj.status == "success") {

                    showToast("Initiating Payment...", "info");

                    order_id = obj.id

                    payhere.onCompleted = function onCompleted(orderId) {
                        console.log("Payment completed. OrderID:" + orderId);
                        // Note: validate the payment and show success or failure page to the customer
                       sendDonatorMail();
                       document.getElementById("donationForm").reset();

                    };

                    // Payment window closed
                    payhere.onDismissed = function onDismissed() {
                        // Note: Prompt user to pay again or show an error page
                        console.log("Payment dismissed");
                    };

                    // Error occurred
                    payhere.onError = function onError(error) {
                        // Note: show an error page
                        console.log("Error:" + error);
                    };


                    // Put the payment variables here
                    var payment = {
                        "sandbox": true,
                        "merchant_id": "1221315",    // Replace your Merchant ID
                        "return_url": "http://localhost/School_Website/index.php",     // Important
                        "cancel_url": "http://localhost/School_Website/index.php",     // Important
                        "notify_url": "http://sample.com/notify",
                        "order_id": order_id,
                        "items": "Donation",
                        "amount": parseFloat(amount).toFixed(2),
                        "currency": "LKR",
                        "hash": obj.hash, // *Replace with generated hash retrieved from backend
                        "first_name": fname,
                        "last_name": lname,
                        "email": email,
                        "phone": mobile,
                        "address": "Rajasinghe Central College , Hanwella",
                        "city": "Colombo",
                        "country": "Sri Lanka",

                    };

                    // Show the payhere.js popup, when "PayHere Pay" is clicked

                    payhere.startPayment(payment);



                } else {
                    showToast(obj.message || "Something went wrong", "error");
                }

            } catch (err) {
                showToast("Invalid response from server.", "error");
                console.error("Response parsing failed:", err);
            }

        }
    };

    r.open("POST", "paymentProcess.php", true);
    r.send(f);

}




// Helper for Toastify notifications
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


