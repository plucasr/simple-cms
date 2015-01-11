<?php session_start(); ?>
<?php
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
?>
<?php include '../includes/config.php'; ?>
<?php include '../includes/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Simple CMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Admin Panel <a href="new.php" class="btn btn-success">New Post</a></h1>
    <table class="table table-striped">
        <tr><th>Title</th><th>Date</th></tr>
        <?php foreach (get_posts($conn) as $post): ?>
            <tr>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo $post['created_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
