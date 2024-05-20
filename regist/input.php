<?php 
session_start();
if(!empty($_SESSION['my_shop']['regist'])){
    $regist = $_SESSION['my_shop']['regist'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link href="" >
</head>
<body>
    <main class="container">
    <h2>会員登録</h2>  
    <form action="confirm.php" method="post">
        <div>
            <label for="">名前</label>
            <input type="text" name="name" value="<?= @$regist['name']?>">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" value="<?= @$regist['email']?>">
        </div>
        <div>
            <label for="">パスワード</label>
            <input type="password" name="password">
        </div>
        <div class="mt-text-center">
            <button class="btn btn-primar">次へ</button>
            <a href="">ログイン画面</a>
        </div>
    </form>
    </main>
</body>
</html>