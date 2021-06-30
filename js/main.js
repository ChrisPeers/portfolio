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

typeWriter();