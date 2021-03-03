<?php

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css" media="screen" />
    <title>Forkster.de</title>
</head>
<body>
<header>
    <div class="header-logo">
        <h1>Forkster.de</h1>
    </div>
    <nav>
        <ul class="header-links">
            <li>
                <a href="index.php">
                    <span class="highlight">
                        Home
                    </span>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <span class="highlight">
                        Blog
                    </span>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <span class="highlight">
                        Lebenslauf
                    </span>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <span class="highlight">
                        Gästebuch
                    </span>
                </a>
            </li>

        </ul>
    </nav>
    <div class="header-login">
        <div class="text">Anmelden</div>
        <img src="assets/icons/signIn.svg">
    </div>
</header>
<main>
    <section id="sec-1">
        <h2>Aktuelles</h2>
        <?require "assets/php/gallery.php"?>
    </section>
    <section class="sec-2">
        <article>
            <h2>Darf ich mich vorstellen?</h2>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                Lorem ipsum dolor sit amet.
            </p>
        </article>
        <article>
            <h2>Letzter Artikel Urlaub</h2>
            <div class="article-content">
                <p>
                    <img src="assets/images/vacation/IMG-20170609-WA0013.jpg">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                    ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </article>
        <article>
            <h2>Letzter Artikel Hobbies</h2>
            <div class="article-content">
                <p>
                    <img src="assets/images/hobbies/code-t.jpg">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                    ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </article>
    </section>
</main>
<footer>
    <div class="contact">
        <p>
            Kontak:
            Matthias Gabel
            Oststraße 3

            99086 Erfurt
        </p>
    </div>
</footer>
</body>
</html>