<?php
    include_once 'header.php';
?>
<div class="content"> <!-- content pradžia -->
    <h1>Login</h1>
    <form id="login-form-full" action="includes/login.inc.php" method="post">
        <p>Your e-mail</p>
        <input type="email" placeholder="E-mail" name="email" required>
        <p>Password</p>
        <input type="password" placeholder="Password" name="pwd" required>
        <button type="submit" name="submit">Login</button>
    </form>
</div> <!-- content pabaiga -->
<?php
    include_once 'footer.php';
?>
