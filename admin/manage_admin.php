<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../private/phpscripts/db_connector.php';
require_once '../private/phpscripts/functions.php';
if (!(loggedIn())) {
    redirect(server_root(1) . '/admin/login.php');
}

$pagetitle = 'Add Admin..';
require '../private/includes/header.php';

?>

    <div class="container margin-adder">
        <?php if (!empty($_SESSION['messages'])) {
            echo $_SESSION['messages'];
            $_SESSION['messages'] = '';
        } ?>

        <form name="test" method="post"
              action="<?php echo server_root() ?>/private/form_processors/save_admin.php<?php if (isset($_GET['id'])) echo '?id=' . $_GET['id']; ?>">

            <!-- USERNAME -->
            <div class="form-group row">
                <label for="username" class="col-12 col-md-3 col-form-label">Username:</label>
                <div class="col">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="form-group row">
                <label for="password" class="col-12 col-md-3 col-form-label mb-2">Password:</label>
                <div class="col-12 col-md-9">
                    <input type="password" name="password" class="form-control" id="password"
                           placeholder="Password">
                </div>
                <label for="password_repeat" class="col-12 col-md-3 col-form-label">Repeat password:</label>
                <div class="col-12 col-md-9">
                    <input type="password" name="password_repeat" class="form-control" id="password_repeat"
                           placeholder="Password">
                </div>
            </div>

            <!-- SUBMIT -->
            <div class="row">
                <div class="col offset-md-2 mb-3">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit"/>
                </div>
            </div>
        </form>

    </div>

<?php require '../private/includes/footer.php';