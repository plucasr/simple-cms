<?php session_start(); ?>
<?php
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
?>
<?php include '../includes/config.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $sql = "INSERT INTO posts (title, body) VALUES ('" . $title . "', '" . $body . "')";
    mysqli_query($conn, $sql);
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>New Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>New Post</h1>
    <form method="post">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Title" required>
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" rows="10" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>
</body>
</html>
