<?php


$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
$query->execute();

$blogPosts= $query->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head>
    <title>Blow With Platzi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blow Title</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h2>Posts</h2>
            <a class="btn btn-primary" href="insert-post.php">New Post</a>
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                foreach ($blogPosts as $blogPost){
                    echo '<tr>';
                    echo '<td>'.$blogPost['title'].'</td>';
                    echo '<td>Edit</td>';
                    echo '<td>Delete</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
        <div class="col-md-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquid atque aut autem, commodi cum debitis eius eveniet expedita id maiores minus necessitatibus nulla porro quasi sint totam, unde vero.
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <foot>
                This is a footer <br>
                <a href="admin/index.php">Admin Panel</a>
            </foot>
        </div>

    </div>
</div>
</body>
</html>