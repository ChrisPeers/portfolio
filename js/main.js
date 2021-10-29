const textH2 = document.getElementById("hero-h2");
const text = "I'm a Web Developer";
const speed = 100;
let i = 0;

function typeWriter() {
    if (i < text.length) {
        textH2.innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

function validateForm() {
    let a = document.forms["contactForm"]["name"].value;
    let b = document.forms["contactForm"]["email"].value;
    let c = document.forms["contactForm"]["message"].value;

    if (a == "") {
        alert("The Name field must be filled out");
        return false;
    } else if (b == "") {
        alert("The Email field must be filled out");
        return false;
    } else if (c == "") {
      alert("The Message field must be filled out");
      return false;
    }
} 

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        alert("Please enter only Numbers.");
        return false;
    }

    return true;
}

function validatePhone() {

    var phone = document.getElementById('cont-number').value;
    

    if((phone.length > 0) && phone.length < 10 || phone.length > 20) {
        alert('Incorrect amount of phone digits.');
        return false;
    }
  
    if(phone.length > 0 && !phone.match(/^[+]?[\s./0-9]*[(]?[0-9]{1,4}[)]?[-\s./0-9]*$/g)) {
        alert('Please enter normal phone digits only.');
        return false;
    }
  }

  function validateEmail() {

    var email = document.getElementById('email').value;

    if(email.length > 0 && !email.match(/^\S+@\S+\.\S+$/)) {
  
        alert('Email Invalid');
        return false;
    }
  }
  



typeWriter();