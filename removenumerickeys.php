<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $arr = [ '0' => 'sth', 'name' => "kj", '1' => 'admin', 'role' => 'user'];
    foreach($arr as $key => $val) {
        echo "Key: $key Val: $val <br>";
    }

    function removeNumericKeys($arr) {
        $output = [];
        foreach($arr as $key => $val) {
            if(!is_numeric($key)) {
                $output[$key] = $val;
            }
        }
        return $output;
    }

    $arr2 = removeNumericKeys($arr);
    foreach($arr2 as $key => $val) {
        echo "Key: $key Val: $val <br>";
    }
    ?>
</body>
</html>