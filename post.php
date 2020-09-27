<?php 
    include 'header.php';
?>
<?php   
    include 'nav.php'

?>
    <main class="post-one-main">
        <?php
            function getPostDetailsFromDatabase(){
                $postDetails = array('title' => 'Blog post 1',
                                    'content' =>  'My first blog post',
                                    'date' => '09/26/2020',
                                    'author' => 'Samyu Miller');

                 return $postDetails;
            }

            $postDetails = getPostDetailsFromDatabase()
        ?>
        <h1><?php echo $postDetails["title"]?></h1>
        <div>
            <h3>Author:</h3>
            <p><?php echo $postDetails['author']?></p>
        </div>
        <div>
            <h3>Date Published:</h3>
            <p><?php echo $postDetails['date']?></p>
        </div>
        <div>
            <h3>Content</h3>
            <p><?php echo $postDetails['content']?></p>
        </div>
    </main>
    <?php
   include 'footer.php'
   ?>
</body>
</html>

