<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if文の練習</title>
</head>
<body>
    <h1><?php echo 'if文の練習'; ?></h1>
    <?php
    $numone = 65;
    if ($numone < 18) {
        echo '子供です';
    } elseif ($numone < 65) {
        echo '大人です';
    } else {
        echo '高齢者です';
    }
    ?>
</body>
</html>