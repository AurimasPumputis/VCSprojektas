<?php
    include_once 'header.php';
?>
            <div class="content"> <!-- content pradžia -->

                <?php 
                    if ($_SESSION['u_admin'] == 1) :
                ?>

                <div id="admin-nav">
                    <p id="admin-nav-add"><a class="nav-text-color" href="javascript:void(0);">Add new</a></p>
                    <p id="admin-nav-users"><a href="javascript:void(0);">Users</a></p>
                    <p id="admin-nav-settings"><a href="javascript:void(0);">Settings</a></p>
                </div>
                <div id="add-content">
                    <h1>Add Content</h1>
                    <form id="add-content-form" action="includes/add_content.inc.php" method="post" enctype="multipart/form-data">
                        <p>Type</p>
                        <select name="type">
                            <option value="movie">Movie</option>
                            <option value="tv-show">TV Show</option>
                        </select>
                        <p>Title</p>
                        <input name="title" type="text" required>
                        <p>Poster</p>
                        <input name="poster" type="file" required>
                        <p>Rating</p>
                        <input name="rating" type="number" min="0" max="10" step="0.01" required>
                        <p>Published</p>
                        <input name="published" type="date" required>
                        <p>Genre</p>
                        <input name="genre" type="text" required>
                        <p>Storyline</p>
                        <textarea name="storyline" required></textarea>
                        <button name="submit" type="submit">Save</button>
                    </form>
                </div>
                <div id="user-list" class="admin-hide">
                    <h1>User list</h1>
                </div>
                <div id="admin-settings" class="admin-hide">
                    <h1>SETTINGS</h1>
                    <form>
                        <p>First name</p>
                        <input id="user-first-name" name="user-first-name" type="text" placeholder="Your name">
                        <p>Last name</p>
                        <input id="user-last-name" name="user-last-name" type="text" placeholder="Your last name">
                        <p>E-mail</p>
                        <input id="user-email" name="user-email" type="email" placeholder="<?php echo $_SESSION['u_email']; ?>" disabled>
                        <p>New password</p>
                        <input id="user-pass">
                        <button id="user-save" name="save-btn" type="submit">Save</button>
                    </form>
                </div>

                <?php elseif (isset($_SESSION['u_admin']) && $_SESSION['u_admin'] == 0) : ?>
                <h1>SETTINGS</h1>
                <form id="user-settings">
                    <p>First name</p>
                    <input id="user-first-name" name="user-first-name" type="text" placeholder="Your name">
                    <p>Last name</p>
                    <input id="user-last-name" name="user-last-name" type="text" placeholder="Your last name">
                    <p>E-mail</p>
                    <input id="user-email" name="user-email" type="email" placeholder="<?php echo $_SESSION['u_email']; ?>" disabled>
                    <p>New password</p>
                    <input id="user-pass">
                    <button id="user-save" name="save-btn" type="submit">Save</button>
                </form>
                <?php else : ?>
                    <script>
                    location.replace("index.php?settings=error");
                    </script>
                <?php endif; ?>

            </div> <!-- content pabaiga -->
<?php
    include_once 'footer.php';
?>
