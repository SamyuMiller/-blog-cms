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
            function getPostTitlesFromDatabase(){
                $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
                return $postTitles;
            }

            $postTitles = getPostTitlesFromDatabase();

            foreach($postTitles as $postTitles){
                echo "<li><a href='post.php'><div class='post-card'>" . $postTitle . "</div><a/></li>";
            }
        ?>
        <!-- <li><a href="./post.php">Post #1</a></li> -->
    
    </main>
   <?php
   include 'footer.php'
   ?>

</body>
</html>