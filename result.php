<!-- PHP  -->
<?php

    $first_text = $_GET["first-text"];

    $result = strlen($first_text);

    $censured_word = $_GET["censured-word"];

    $changed_text = str_replace($censured_word, '***', $first_text);
    $new_result = strlen($changed_text);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p><?php var_dump($first_text); ?></p>
    <p><?php $first_text; ?></p>
    <span><?php echo $result; ?></span>
<hr>
<p><?php var_dump($changed_text); ?></p>
    <p><?php echo $changed_text; ?></p>
    <span><?php echo $new_result; ?></span>
</body>
</html>