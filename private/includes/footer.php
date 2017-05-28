<footer class="footer">
    <div class="container d-flex justify-content-between">
        <span class="text-muted">Wenture &copy</span>
        <?php if (loggedIn()) echo '<a class="text-muted" href="' . server_root(1) . '/admin/admin.php">Admin Area</a>'; ?>
        <?php echo '<a class="text-muted" href="' . server_root(1) . '/info/about.php">About Wenture</a>'; ?>
    </div>
</footer>

<!--Scripts-->

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<?php if (isset($extra_scripts)) {
    foreach ($extra_scripts as $k => $v) {
        echo $v;
    }
} ?>

</body>
</html>
