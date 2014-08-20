<?php include 'includes/config.php'; ?>
<?php include 'includes/functions.php'; ?>
<?php $post = get_post($conn, $_GET['id']); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $post['title']; ?> - Simple CMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1><?php echo $post['title']; ?></h1>
    <p class="text-muted"><?php echo $post['created_at']; ?></p>
    <p><?php echo nl2br($post['body']); ?></p>
    <a href="index.php">&larr; Back</a>
</div>
</body>
</html>
