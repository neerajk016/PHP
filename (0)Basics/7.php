<html>
    <body>
        <form action="7.php" method="GET">
            Username: <input type="text" name="username" value="">
            <input type="submit">
        </form>
    </body>
</html>

<?php
    echo $_GET["username"];
?>
