<?php

include("../includes/admin_protect.php");
include("../includes/database.php");

$env = parse_ini_file("../../.env");

$conn = pg_connect(
    "host={$env["DATABASE_HOST"]} port={$env["DATABASE_PORT"]} dbname=sas user={$env["DATABASE_USER"]} password={$env["DATABASE_PASS"]}"
);

$title = $_POST['title'] ?? '';
$banner = $_POST['banner'] ?? '';
$tags_raw = $_POST['tags'] ?? '';
$description = $_POST['description'] ?? '';
$instructor = $_POST['instructor'] ?? '';
$date = $_POST['date'] ?? '';
$campus = $_POST['campus'] ?? '';

$tags_array = array_map('trim', explode(',', $tags_raw));
$tags_pg_array = '{' . implode(',', array_map(fn($tag) => '"' . addslashes($tag) . '"', $tags_array)) . '}';

$sql = "INSERT INTO events (title, banner, tags, description, instructor, date, campus)
        VALUES ($1, $2, $3, $4, $5, $6, $7)";

$result = pg_query_params($conn, $sql, [
    $title,
    $banner,
    $tags_pg_array,
    $description,
    $instructor,
    $date,
    $campus
]);

if ($result) {
    header('Location: /');
    exit;
} else {
    http_response_code(500);
    echo 'Error saving event';
}

?>