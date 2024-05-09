<!-- Code authored by: Will Hergott -->

<?php
$_SESSION = array();

session_destroy();

header("Location: index.php");
exit;
?>