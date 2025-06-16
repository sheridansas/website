<?php
$env = parse_ini_file("../.env");
$conn = pg_connect(
    "host={$env["DATABASE_HOST"]} port={$env["DATABASE_PORT"]} dbname=sas user={$env["DATABASE_USER"]} password={$env["DATABASE_PASSWORD"]}"
);
?>
