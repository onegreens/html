<!DOCTYPE html>
<html>
<body>

<?php
// setcookie("user", "Alex Porter", time() + 3600);

echo $_COOKIE["user"];

// A way to view all cookies
print_r($_COOKIE);
if (isset($_COOKIE["user"]))
    echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
    echo "Welcome guest!<br />";

setcookie("user", "", time() - 3600);

?>
</body>
</html>