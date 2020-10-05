
<?php 
    include 'header.php';

?>
<?php   
    include 'nav.php'

?>
    <header class="center">
        Samyu Miller's Blog
    </header>
    <div class="center-blog-post">
        <p>BLOG POSTS</p>
    </div>
    <main class="postBox">
        <?php
            
function getPostTitlesFromDatabase() {
    // Get all the post titles from the posts table
    include_once 'db_connect.php';
    $sql = "SELECT title FROM posts";
    $result = mysqli_query($conn, $sql);
    
    // Get each result row as an assoc array, then add title to $postTitles
    $postTitles = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($postTitles, $row['title']);
    }
    return $postTitles;
}

            $postTitles = getPostTitlesFromDatabase();

            foreach($postTitles as $postTitle){
                echo "<br><li><a href='post.php?title=". $postTitle. "'><div class='post-card'>" . $postTitle . "</div><a/></li><br>";
            }
        ?>
        <!-- <li><a href="./post.php"><div class="post-card">Post #1</div></a></li> -->
    
    </main>
   <?php
   include 'footer.php'
   ?>

</body>
</html>