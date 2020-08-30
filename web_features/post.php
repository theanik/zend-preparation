<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        print_r($_POST);

    ?>

    <form action="post.php" method="POST">

    <input type="text" name="name[first]">
    <input type="text" name="name[last]">


    <select name="subject[]" id="" multiple="yes">
        <option value="web">web</option>
        <option value="cloude">cloude</option>
        <option value="devops">devops</option>
    </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>