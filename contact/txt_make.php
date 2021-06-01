<?php
// var_dump($_POST);
// exit();


$name = $_POST["name"];
$furigana = $_POST["furigana"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$sex = $_POST["sex"];
$item = $_POST["item"];
$content = $_POST["content"];

$write_data = "{$name} {$furigana} {$email} {$tel} {$sex} {$item} {$content}\n";

$file = fopen('data/data.txt', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header('Location:thanks.php');
