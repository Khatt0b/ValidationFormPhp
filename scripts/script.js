// button.querySelector
const button = document.getElementById("button");
button.addEventListener("click", (e) => {
    const email = document.getElementById("email");
    const nameInput = document.getElementById("name");
    const phone = document.getElementById("phone");
    const message = document.getElementById("message");

    if (validateName(nameInput) ||
        emailIsValid(email) ||
        validatePhone(phone) ||
        validateMessage(message)) {
        e.preventDefault();
    }
});

function validatePhone(phone) {
    var phoneformat = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
    let msg = document.getElementById("phonemsg");
    if (!phone.value.match(phoneformat)) {
        phone.style.borderColor = "red";
        msg.style.color = "red";
        return true;
    } else {
        phone.style.borderColor = "green";
        msg.style.color = "green";
        return false;
    }
}

function emailIsValid(email) {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let msg = document.getElementById("emailmsg");
    if (!email.value.match(mailformat)) {
        email.style.borderColor = "red";
        msg.style.color = "red";
        return true;
    } else {
        email.style.borderColor = "green";
        msg.style.color = "green";
        return false;
    }
}

function validateMessage(message) {
    let msg = document.getElementById("messagemsg");
    let num = message.value.length;
    if (num < 10) {
        message.style.borderColor = "red";
        msg.style.color = "red";
        return true;
    } else {
        message.style.borderColor = "green";
        msg.style.color = "green";
        return false;
    }
}


function validateName(name) {
    let msg = document.getElementById("namemsg");
    if (name.value == "") {
        name.style.borderColor = "red";
        msg.style.color = "red";
        return true;
    } else {
        name.style.borderColor = "green";
        msg.style.color = "green";
        return false;
    }
}