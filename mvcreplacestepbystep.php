<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $route = '{controller}/{id:\d+}/{action}';
    echo "Current route: $route <br>";
    $code =  "\$route = preg_replace('/\\//', '\\\/', \$route)";
    echo "<code>$code</code><br>";
    $route = preg_replace('/\//', '\\/', $route);
    echo "Current route: $route <br>";
    $code = "\$route = preg_replace('/\\{([a-z]+)\\}/', '(?P<\\1>[a-z-]+)', \$route)";
    echo "<code>$code</code><br>";
    $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);
    echo "Current route: $route <br>";
    $code = "\$route = preg_replace('/\\{([a-z]+):([^\\}]+)\\}/', '(?P<\\1>\\2)', \$route)";
    echo "<code>$code</code><br>";
    $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);
    echo "Current route: $route <br>";
    $code = "\$route = '/^' . \$route . '\$/i'";
    echo "<code>$code</code><br>";
    $route = '/^' . $route . '$/i';
    echo "Current route: $route <br>";
    ?>
</body>
</html>