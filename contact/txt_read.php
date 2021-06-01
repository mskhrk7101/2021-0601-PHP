<?php

$str = '';

$file = fopen('data/data.txt', 'r');
flock($file, LOCK_EX);

if ($file) {
    while ($line = fgets($file)) {
        $str .= "<div>{$line}</div>";
    }
}
flock($file, LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ詳細</title>
</head>

<body>
    <fieldset>
        <legend>お問い合わせ詳細</legend>
        <a href="txt_input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>リスト</th>
                </tr>
            </thead>
            <tbody>
                <?= $str ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>