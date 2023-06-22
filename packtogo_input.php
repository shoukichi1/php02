<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gear_registration（入力画面）</title>
    <!-- <link rel="stylesheet" href="css/reset.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form action="packtogo_create.php" method="POST">
        <fieldset>
            <legend>registration（入力画面）</legend>
            <a href="packtogo_read.php">gear_list（一覧画面）</a>
            <div>
                <p>ギアの名称</p>
                <input type="text" id="gear_name" name="gear_name">
            </div>
            <div>
                <p>ギア画像</p>
                <input type="file" id="imageUpload" accept="image/*" name="gear_image">
            </div>

            <div>
                <p>ギアの重さ</p>

                <input type="number" id="gram" name="gear_gram">
            </div>
            <div>
                <p>ギアの種類</p>
                <select name="gear_kind" id="gear_kind" class="gear_kind">
                    <option value="head_gear">head gear</option>
                    <option value="base_layer">base layer</option>
                    <option value="middle_layer">middle layer</option>
                    <option value="outer">outer</option>
                    <option value="bottoms">bottoms</option>
                    <option value="shoes">shoes</option>
                    <option value="backpack">backpack</option>
                    <option value="other">other</option>
                </select>
            </div>
            <div>
                <p>ギアの説明</p>
                <textarea id="text_area" name="gear_text"></textarea>
            </div>
            <div>
                <button>submit</button>
            </div>
            <!-- <div>
                <input type="button" value="登録する" id="registration_btn">
                <input type="button" value="クリア" id="clear_btn">
            </div> -->
        </fieldset>
    </form>

</body>

</html>