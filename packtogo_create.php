<?php

// var_dump($_POST);
// exit();
// POSTデータ確認
if (
    // データが入っていない場合
    !isset($_POST["gear_name"]) || $_POST["gear_name"] === "" ||
    !isset($_POST["gear_image"]) || $_POST["gear_image"] === "" ||
    !isset($_POST["gear_kind"]) || $_POST["gear_kind"] === "" ||
    !isset($_POST["gear_gram"]) || $_POST["gear_gram"] === "" ||
    !isset($_POST["gear_text"]) || $_POST["gear_text"] === ""
) {
    exit('ParamError');
}

$gear_name = $_POST["gear_name"];
$gear_image = $_POST["gear_image"];
$gear_kind = $_POST["gear_kind"];
$gear_gram = $_POST["gear_gram"];
$gear_text = $_POST["gear_text"];


// DB接続
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
$sql = 'INSERT INTO gear_table (id, gear_name, gear_image, gear_kind, gear_gram, gear_text, created_at, updated_at) VALUES (NULL, :gear_name, :gear_image, :gear_kind, :gear_gram, :gear_text, now(), now())';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':gear_name', $gear_name, PDO::PARAM_STR);
$stmt->bindValue(':gear_image', $gear_image, PDO::PARAM_STR);
$stmt->bindValue(':gear_kind', $gear_kind, PDO::PARAM_STR);
$stmt->bindValue(':gear_gram', $gear_gram, PDO::PARAM_STR);
$stmt->bindValue(':gear_text', $gear_text, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

// todo_inputに戻る
header('Location:packtogo_input.php');
exit();
