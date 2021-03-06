<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Chris Peers - Coding Examples</title>

    <!-- Include the header and side menu with php -->
    <?php include("inc/headerSideMenu.php"); ?>

    <main>
        <div class="coding-section">
            <div class="coding-info">
                <h1>Coding Examples</h1>

                <div class="coding-container">
                    <div class="section-links"> 
                        <h2>Section Links</h2>
                        <ul class="example-menu">
                            <li><a href="codingex.html#example-1">Basic JavaScipt Example</a></li>
                            <li><a href="codingex.html#example-2">Basic CSS Example</a></li>
                            <li><a href="codingex.html#example-3">SQL Example</a></li>
                        </ul>
                    </div>
                    
                    <div class="example example-1" id="example-1">
                        <h2>Basic JavaScript Example</h2>
                        <div class="coding-box">
                            <pre>
                                <code>const textH2 = document.getElementById("hero-h2");
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
                                </code>
                            </pre>
                        </div>
                        <h3>Typewritter Effect</h3>
                        <p>The code above shows a basic function that was used to add a typewriting effect to part of the heading on the main page of this portfolio. The below Gif shows what it looks like when it runs.</p>
                    </div>

                    <div class="empty-div"></div>

                    <div class="example example-2" id="example-2"></div>

                        <h2>Basic CSS Example</h2>
                        <img src="images/codeExampleOne.gif" alt="Gif showing the typewriter and cursor effect"  class="gifExample"/>
                    
                        <div class="coding-box">
                            <pre>
                                <code>@keyframes blink {

    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.hero {

    & h2 {
        padding-top: 20px;
        font-size: 2.3rem;
    }

    & h2::after {
        content: "";
        position: absolute;
        width: 1px;
        animation: blink 0.8s infinite ease;
        height: 2rem;
        margin: 8px 0 0 2px;
        border-right: 3px solid white;
    }
}
                                </code>
                            </pre>
                        </div>
                        <h3>Blinking Cursor Effect</h3>
                        <p>The code above shows basic CSS that I created to make a blinking cursor effect on part of the heading on the main page of this portfolio. The gif above shows what this looks like.</p>
                    </div>

                    <div class="empty-div"></div>

                    <div class="example example-3" id="example-3">
                        <h2>Oracle SQL Example</h2>

                        <img src="images/TopDownErd.png" alt="Top Down ERD">
                        <a href="https://drive.google.com/drive/folders/1ZgC3D_BGzuUaxmxnHcatJ2cyhAu88JEH?usp=sharing">Click Me to view the SQL Schema, ERD and Results Images</a>
                        <div class="coding-box">
                            <pre>
                                <code>SELECT pets.pet_id AS "Pet ID", pets.pet_name AS "Pet Name", appointments.cost AS "Cost of Appointments"
    FROM pets JOIN appointments ON(pets.pet_id = appointments.pet_id)
    GROUP BY pets.pet_id, pets.pet_name, appointments.cost
    HAVING appointments.cost < (SELECT AVG(appointments.cost) FROM appointments);
                                    
                                </code>
                            </pre>
                            <img src="images/SqlCodeExample.png" alt="SQL Code Example">
                        </div>
                        <h3>SQL Query</h3>
                        <p>The above examples show an SQL database that I created during University. It was part of a group project and I was in charge of the SQL.
                            <a href="https://drive.google.com/drive/folders/1ZgC3D_BGzuUaxmxnHcatJ2cyhAu88JEH?usp=sharing">Click this link</a> to see the Schema that I created as well as larger versions of the above images
                             (if they are too hard to read). <br>
                            <br>The Select statement shown is used to find the pet id, name and cost of appointments where the cost of the appointment is less than the average appointment
                        cost of all pet appointments. The results of the query are visable in the image above.   </p>
                    </div>
                </div>

            </div> 
        </div>

    <!-- Include the header and side menu with php -->
    <?php include("inc/footer.php"); ?>