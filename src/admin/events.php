<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/functions.php';

$pagetitle = 'Events';
require '../header.php'; ?>

    <!-- content -->
    <div class="container" style="margin-top: 100px">
        <div class="card-columns mt-4">
            <?php
            $sql = "SELECT events.*,types.type FROM events LEFT JOIN types ON types.id = events.type;";

            if ($result = $mysqli->query($sql)) {
                foreach ($result as $row) {
                    require '../include/cards.php';
                }
            } ?>
        </div> <!-- card-columns -->
        <div class="btn-group">
            <i class="material-icons" style="color: cyan;">add_circle</i>
        </div>

    </div> <!-- container -->

<?php require '../footer.php';