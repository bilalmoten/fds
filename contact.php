<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Flux Design Solutions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <!-- <form action="mailto:info@fluxdesignsolutions.com" method="POST" enctype="text/plain">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <label for="message">Your Message</label>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                <button class="btn" type="submit">Send Message</button>
            </form> -->
            <form action="https://formspree.io/f/meqbqbar" method="POST">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" placeholder="Your Name" required>
    <label for="email">Your Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email" required>
    <label for="message">Your Message</label>
    <textarea id="message" name="message" placeholder="Your Message" required></textarea>
    <button class="btn" type="submit">Send Message</button>
</form>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    </body>
</html>
