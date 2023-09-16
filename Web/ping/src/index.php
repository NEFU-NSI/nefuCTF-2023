<?php

    $target = $_REQUEST[ 'ip' ];
    if($target){
    $cmd = shell_exec( 'ping  -c 4 ' . $target );
    }


?>
<!DOCTYPE html>
<html>
<head>
    <title>Ping Test</title>
</head>
<body>
    <h1>Ping Test</h1>
    <form action="index.php" method=post>
        <label for="ip">Enter IP Address:</label>
        <input type="text" id="ip" name="ip" required>
        <button type="submit">Ping</button>
    </form>
    <div id="result">
        <?php
            echo $cmd;
        ?>
    </div>

</body>
</html>


