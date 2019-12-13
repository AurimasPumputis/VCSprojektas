<?php
    include_once 'header.php';
?>
<div class="content"> <!-- content pradžia -->
    <h1>My Lists</h1>
    <?php if (isset($_SESSION['u_email'])) : ?>
        <div class="lists"><p>You do not have any lists.</p></div>
    <?php else : ?>
        <div class ="lists"><p>You have to be registered in order to create lists.</p></div>
    <?php endif; ?>
</div> <!-- content pabaiga -->
<?php
    include_once 'footer.php';
?>
