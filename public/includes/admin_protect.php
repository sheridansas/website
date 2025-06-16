<?php
session_start();
if (!isset($_SESSION["is_admin"]) || $_SESSION["is_admin"] !== true) {
    http_response_code(403);
    exit("Forbidden");
}
?>
