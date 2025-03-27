<?php
include "db.php";
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM books WHERE id=$id");
$book = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h2 class="text-center mb-4">Edit Book</h2>
        <div class="card p-5 shadow" style="max-width: 500px; margin: 0 auto;">
            <form action="submit.php" method="POST">
                <input type="hidden" name="id" value="<?= $book['id']; ?>">
                <div class="mb-3">
                    <label class="form-label">Title:</label>
                    <input type="text" name="title" value="<?= htmlspecialchars($book['title']); ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Author:</label>
                    <input type="text" name="author" value="<?= htmlspecialchars($book['author']); ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Publication Year:</label>
                    <input type="number" name="publication_year" value="<?= $book['publication_year']; ?>" class="form-control" required>
                </div>
                <button type="submit" name="update" class="btn btn-warning w-100">Update Book</button>
            </form>
        </div>
    </div>
</body>
</html>
