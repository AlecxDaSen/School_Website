function payNow() {
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var amount = document.getElementById("amount").value.trim();
    var msg = document.getElementById("msg").value.trim();

    var f = new FormData();
    f.append("name", name);
    f.append("email", email);
    f.append("amount", amount);
    f.append("msg", msg);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            try {
                var obj = JSON.parse(t);

                if (obj.status === "success") {
                    var id = obj.id;

                    showToast("Initiating Payment...", "info");

                    payhere.onCompleted = function(orderId) {
                        showToast("Payment completed! Order ID: " + orderId, "success");
                        saveInvoice(orderId, id, email, amount);
                    };

                    payhere.onDismissed = function() {
                        showToast("Payment dismissed by user.", "warning");
                    };

                    payhere.onError = function(error) {
                        showToast("Payment error: " + error, "error");
                    };

                    var payment = {
                        "sandbox": true,
                        "merchant_id": "1221441",
                        "return_url": "http://localhost/eshop/singleProductView.php?id=" + id,
                        "cancel_url": "http://localhost/eshop/singleProductView.php?id=" + id,
                        "notify_url": "http://sample.com/notify",
                        "order_id": id,
                        "items": "Order " + id,
                        "amount": parseFloat(amount).toFixed(2),
                        "currency": "LKR",
                        "first_name": name,
                        "last_name": "",
                        "email": email,
                        "phone": "",
                        "address": msg,
                        "city": "",
                        "country": "Sri Lanka"
                    };

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


