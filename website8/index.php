<?php
    require('config/config.php');
    require('config/db.php');

    // Create Query
    $query = 'SELECT * FROM posts';

    // Get Resulst
    $result = mysqli_query($conn, $query);
    
    // Fetch Data 
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($posts);

    // Free Result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1>Posts</h1>
        <?php foreach($posts as $post): ?>
            <div class="card bg-light">
                <div class="card-body">
                    <h3><?php echo $post['title']; ?></h3>
                    <small>Created on <?php echo $post['created_at']; ?> by
                        <?php echo $post['author']; ?></p></small>
                        <p><?php echo $post['body']; ?></p>
                        <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>      
                </div>
            </div>
        <?php endforeach; ?>
<?php include('inc/footer.php'); ?>