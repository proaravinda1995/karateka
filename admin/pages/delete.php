<?php

// Built-in PHP function to delete file
unlink($_GET["name"]);

// Redirecting back
echo "<script type='text/javascript'> document.location = 'reg.php'; </script>";

?>