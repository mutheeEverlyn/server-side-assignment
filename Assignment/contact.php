<?php
include("include/start.php");
include("include/header.php");
?>
<div class="container">
        <h1>Contact Us</h1>
        <div class="contact-container">
            <div class="contact-info">
                <h2>Location & Hours</h2>
                <p><strong>Address:</strong> 123 Main Street, City, Country</p>
                <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                <p><strong>Email:</strong> info@example.com</p>
                <p><strong>Hours:</strong> Mon-Fri: 9am - 5pm</p>
            </div>
            <div class="contact-form">
                <h2>Send us a message</h2>
                <form action="#" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>

<?php
include('./include/footer.php');
?>
</body>

</html>