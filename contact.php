<?php
    include_once 'header.php';
?>
<div class="content"> <!-- content pradžia -->
    <h1>Contact Us</h1>
    <form id="contact-form" action="includes/contact.inc.php" method="post">
        <p>First name</p>
        <input id="contact-first-name" name="name" type="text" placeholder="Your name" required>
        <p>E-mail</p>
        <input id="contact-email" name="email" type="email" placeholder="Your e-mail" required>
        <p>Message</p>
        <textarea id="contact-textarea" name="message" placeholder="What do you want to tell us?" required></textarea>
        <button id="contact-send" name="submit" type="submit">Send</button>
    </form>
</div> <!-- content pabaiga -->
<?php
    include_once 'footer.php';
    if ($_GET['message'] == 'sent') {
        echo "<script>alert('Dėkojame. Jūsų žinutė gauta. Netrukus susisieksime.');</script>";
    }
?>
