<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
    <ul>
        <li><a href="./index.php">HOME</a></li>
        <!-- <li><a href="./post.html">post</a></li> -->
        <li><a href="./post-submission.php">CREATE POST</a></li>
    </ul>
    </nav>
    <header>

    </header>
    <main class="formStyle">
        <!-- The form must have input fields for title, author, date, a textarea for content and a submit button. Use the appropriate input types for each field. -->
      <form action="">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="author">Author</label>
        <input type="text" name="title" id="author">
        <label for="date">Date</label>
        <input type="date" name="title" id="date">
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <button type="submit">Submit</button>
      </form>
    </main>
    <footer>
        Follow Me 
    </footer>
</body>
</html>