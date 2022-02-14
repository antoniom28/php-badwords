<?php
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit officiis repellat ad doloribus accusantium libero asperiores, et quo. Itaque architecto reiciendis enim ex et. Recusandae necessitatibus soluta corporis veritatis provident.";
    $censure = $_GET["censure"];

    $text = str_replace(strtolower($censure), '***' ,strtolower($text));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $text; ?></p>
    <p> <?php echo strlen($text) ?> parole </p>
</body>
</html>