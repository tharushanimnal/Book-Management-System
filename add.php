<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <h2 class="text-center mb-4">Add New Book</h2>
        <div class="card p-5 shadow" style="max-width: 500px; margin: 0 auto;">
            <form action="submit.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Author:</label>
                    <input type="text" name="author" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Publication Year:</label>
                    <input type="number" name="publication_year" class="form-control" required>
                </div>
                <button type="submit" name="add" class="btn btn-primary w-100">Add Book</button>
            </form>
        </div>
    </div>
</body>
</html>
