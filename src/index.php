<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="/static/css/style.css"/>
        <title>PHP Homework</title>
    </head>
    <body>
        <div class="container">
            <h1>PHP Homework</h1>
            <div class="list">
                <?php dir_list() ?>
            </div>
        </div>
    </body>
</html>

<?php
function dir_list() {
    scan(getcwd());
}

function scan(string $dir) {
    $directory = scandir($dir);
    $ignored = array(".", "..", "static", "index.php");

    for ($i = 0; $i < sizeof($directory); $i++) {
        $sel = $directory[$i];
        if (in_array((string) $sel, $ignored)) {
            continue;
        }

        if (is_dir($sel)) {
            echo "<h3>$sel</h3>";
            echo "<div class='folder'>";
            scan($sel);
            echo "</div>";
            continue;
        }

        $href = "/$dir/$sel";
        echo "<a class='item' href='$href'><span id='name'>{$sel}</span></a><br/>";
    }
}
