<?php
    include_once 'header.php';
?>
<div class="content"> <!-- content pradžia -->
    <h1>Register</h1>
    <form id="register-form-full" action="includes/signup.inc.php" method="post">
        <p>Your e-mail</p>
        <input type="email" placeholder="E-mail" name="email" required>
        <p>Password</p>
        <input type="password" placeholder="Password" name="pwd" required>
        <p>Confirm password</p>
        <input type="password" placeholder="Please confirm your password" name="pwd_confirm" required>
        <button type="submit" name="submit">Register</button>
    </form>
</div> <!-- content pabaiga -->
<?php
    include_once 'footer.php';
?>
