<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $url = "https://www.google.pl/search?q=hello+world";
    echo "$url<br>";
    echo strpbrk($url, "?"); //?q=hello+world
    ?>
</body>
</html>