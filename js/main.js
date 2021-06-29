const textH2 = document.getElementById("hero-h2");
const txt = "I'm a Web Developer";
const speed = 50;
let i = 0;

function typeWriter() {
    if (i < txt.length) {
        textH2.innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

typeWriter();