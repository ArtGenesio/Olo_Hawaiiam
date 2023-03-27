
function send_Email() {
        Email.send({
        Host : "elastic-email key goes here",
        To : 'test@gmail.com',
        From : document.getElementById("mail").value,
        Subject : document.getElementById("name").value + " order",
        Body : "Order is from:" + document.getElementById("name").value
                + "<br> Phone: " + document.getElementById("phone").value
                + "<br> Adress: " + document.getElementById("adress").value
                + "<br> Order: " + document.getElementById("order").value
                
    }).then(
    message => alert("Send Succesfully!")
    );
}


