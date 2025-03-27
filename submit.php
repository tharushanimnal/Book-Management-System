<?php
include "db.php";

function clean_input($data) {
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
}

if (isset($_POST['add'])) {
    $title = clean_input($_POST['title']);
    $author = clean_input($_POST['author']);
    $year = clean_input($_POST['publication_year']);

    $conn->query("INSERT INTO books (title, author, publication_year) VALUES ('$title', '$author', '$year')");
    header("Location: index.php");
    exit();
}

if (isset($_POST['update'])) {
    $id = clean_input($_POST['id']);
    $title = clean_input($_POST['title']);
    $author = clean_input($_POST['author']);
    $year = clean_input($_POST['publication_year']);

    $conn->query("UPDATE books SET title='$title', author='$author', publication_year='$year' WHERE id=$id");
    header("Location: index.php");
    exit();
}
?>
