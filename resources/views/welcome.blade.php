<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend Dev Course</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
    <header>
        <img src="images/logo.svg" alt="23andfour logo" class="logo">

        <nav>
            <a href="#" class="hide-desktop">
                <img src="images/ham.svg" alt="toggle menu" class="menu" id="menu">
            </a>

            <ul class="show-desktop hide-mobile" id="nav">
                <li id="exit" class="exit-btn hide-desktop">
                    <img src="images/exit.svg" alt="exit menu">
                </li>
                <li><a href="#">home</a></li>
                <li><a href="#">services</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <img src="images/server.svg" alt="server graphic" class="server">

        <h1>Web Hosting for the Modern Era</h1>
        <p class="subhead">Go serverless and pay only for what you use.</p>

        <img src="images/scroll.svg" alt="scroll down" class="scroll hide-mobile show-desktop">
    </section>
</div>

<div class="blue-container">
    <div class="container">
        <ul>
            <li>
                <img src="images/icon-1.svg" alt="Calendar icon">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </li>
            <li>
                <img src="images/icon-2.svg" alt="Calendar icon">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </li>
            <li>
                <img src="images/icon-3.svg" alt="Calendar icon">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </li>
        </ul>
    </div>
</div>

<div class="gray-container">
    <div class="container">
        <ul>
            <li>
                <figure>
                    <img src="images/user1.png" alt="User testimonial picture">
                    <blockquote>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas tenetur totam, dolore</blockquote>
                    <figcaption>- Jane Doe</figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="images/user2.png" alt="User testimonial picture">
                    <blockquote>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas tenetur totam, dolore</blockquote>
                    <figcaption>- John Doe</figcaption>
                </figure>
            </li>
        </ul>
    </div>
</div>

<div class="container">
    <h2>Start your free trial now!</h2>
    <a href="#" class="cta">Get Started</a>
</div>

<footer>
    <div class="footer-container">
        <div class="container">
            <a href="#">
                <img src="images/logo-white.svg" class="logo" alt="logo">
            </a>
            <p class="address">Melrose Place, 90210<br>USA</p>
            <ul class="footer-links">
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>

<script>

   var menu =document.getElementById('menu');
   var nav =document.getElementById('nav');
   var exit =document.getElementById('exit');

    menu.addEventListener('click',function (e) {
        nav.classList.toggle('hide-mobile');
        e.preventDefault();
    });

    exit.addEventListener('click',function (e) {
        nav.classList.add('hide-mobile');
        e.preventDefault();
    });

</script>

</body>
</html>
