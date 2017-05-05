<html>
<head>
    <title>Blow With Platzi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blow Titulo</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <?php
                foreach ($blogPosts as $blogPost){
                    echo '<div class="blog-post">';
                    echo '<h2>'.$blogPost['title'].'</h2>';
                    echo '<p>Jan 1, 2020 by <a href="">alex</a></p>';
                    echo '<div class="blog-post-image">';
                    echo '<img src="images/informatica.jpg" alt="">';
                    echo '</div>';
                    echo '<div class="blog-post-content">';
                    echo $blogPost['content'];
                    echo'</div>';
                    echo'</div>';
                }
            ?>
        </div>
        <div class="col-md-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquid atque aut autem, commodi cum debitis eius eveniet expedita id maiores minus necessitatibus nulla porro quasi sint totam, unde vero.
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <foot>
                This is a footerbr <br>
                <a href="<?php  echo BASE_URL; ?>admin/index">Admin Panel</a>
            </foot>
        </div>

    </div>
</div>
</body>
</html>