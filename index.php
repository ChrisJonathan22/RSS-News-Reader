<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS News Reader</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1 class="title">RSS News Reader</h1>
    <div class="content">
        <form method="post" action="/news.php">
            <input type="text" name="feedurl" placeholder="Enter website feed URL" class="url_input">
            <br/>
            <br/>
            <input type="submit" value="Submit" name="submit" class="submit_btn">
        </form>
    </div>
</body>
</html>