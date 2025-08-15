<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTMLにPHPを組み込む</title>
</head>
<body>
    <h1><?php echo 'PHPで見出しを表示'; ?></h1>
    <?php
    $str = 'あ';
    echo "<p>変数\$strの中身は{$str}</p>";
    ?>
</body>
</html>