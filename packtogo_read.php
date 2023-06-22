<?php

// 各種項目設定
$dbn = 'mysql:dbname=pack_to_go_ver1;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}


// SQL作成&実行
$sql = 'SELECT * FROM gear_table ORDER BY created_at DESC';

$stmt = $pdo->prepare($sql);


// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

// SQL実行の処理

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($result);
// echo '</pre>';


$output = "";
foreach ($result as $record) {
    // // 画像ファイルのパス
    // $imagePath = 'path/to/gear_table-gear_image.bin';

    // // バイナリデータを読み込む
    // $imageData = file_get_contents($imagePath);

    // // base64エンコード
    // $base64Image = base64_encode($imageData);

    // HTMLに出力
    $output .= "
    <tr>
        <td>{$record["gear_name"]}</td>
        <td>{$record["gear_kind"]}</td>
        <td>{$record["gear_gram"]}</td>
        <td>{$record["gear_text"]}</td>
    </tr>";

    // <td><img src=\"data:image/png;base64,{$base64Image}\" alt=\"{$record["gear_name"]}\" width=\"100\"></td>

}





?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gear_list（一覧画面）</title>
</head>

<body>
    <fieldset>
        <legend>gear_list（一覧画面）</legend>
        <a href="packtogo_input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>gear_name </th>
                    <th>gear_image </th>
                    <th>gear_kind </th>
                    <th>gear_gram </th>
                    <th>gear_text </th>
                </tr>
            </thead>
            <tbody>
                <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
                <?= $output ?>
            </tbody>
        </table>
    </fieldset>

    <script>
        const result = <?= json_encode($result) ?>;
        console.log(result);
    </script>
</body>

</html>