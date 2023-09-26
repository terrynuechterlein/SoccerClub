function sendMail() {
    var params = {
        name: document.getElementById("name").value, 
        email: document.getElementById("email").value,
        message: document.getElementById("message").value,
    };

    const serviceID = "service_i4yihda";
    const templateID = "template_2mbebg9";

    emailjs
    .send(serviceID,templateID,params)
    .then((res) => {
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("message").value = "";
        console.log(res);
        alert("Success! Your message was sent.");
        })
        .catch((err) => console.log(err));
}