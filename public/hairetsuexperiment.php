<?php
// 1. 変数を用意
$books = ['A', 'B', 'C'];

// 2. compact() に文字列を渡す場合
$result1 = compact('books');
echo "compact('books') の結果:\n";
print_r($result1);

// 3. compact() に変数を直接渡す場合
$result2 = compact($books);
echo "\ncompact(\$books) の結果:\n";
print_r($result2);