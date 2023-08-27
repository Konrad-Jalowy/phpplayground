<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $url = 'posts/index';
    $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";
    preg_match($reg_exp, $url, $matches);
    foreach($matches as $key => $value) {
        if(!is_numeric($key)){
        echo "$key => $value";
        echo "<br>";
        }
    }
    ?>
</body>
</html>