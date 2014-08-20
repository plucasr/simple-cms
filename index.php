<?php include 'includes/config.php'; ?>
<?php include 'includes/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple CMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Simple CMS</h1>
    </div>
    <?php foreach (get_posts($conn) as $post): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $post['title']; ?></h3>
            </div>
            <div class="panel-body">
                <?php echo nl2br($post['body']); ?>
            </div>
            <div class="panel-footer text-muted">
                <?php echo $post['created_at']; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
