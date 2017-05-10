<?php
require '../../vendor/autoload.php';
require '../phpscripts/db_connector.php';
require '../phpscripts/functions.php';

$pagetitle = 'Events';
require '../header.php'; ?>

    <!-- content -->
    <div class="container">
        <div class="card-columns">
            <?php
            $sql = "SELECT * FROM events;";
            if ($result = $mysqli->query($sql)) {
                foreach ($result as $e) {
                    echo generateEventCard($e);
                }
            } ?>
        </div> <!-- card-columns -->
    </div> <!-- container -->

<?php require '../footer.php';