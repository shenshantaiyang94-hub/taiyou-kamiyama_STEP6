<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$name = $_POST['name'];
$companyName = $_POST['companyName'];
$email = $_POST['email'];
$age = $_POST['age'];
$message = $_POST['message'];

$to = 'test@example.com';
$subject = 'お問い合わせがありました';
$body = "お名前: {$name}\n会社名: {$companyName}\nメールアドレス: {$email}\n年齢: {$age}\nお問い合わせ内容:\n{$message}";
$headers = "From: {$email}";

$isSent = mail($to, $subject, $body, $headers);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム - 送信完了画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>お問い合わせフォーム - 送信完了画面</h1>

    <?php if ($isSent): ?>
        <p>お問い合わせが送信されました。ありがとうございます！</p>
    <?php else: ?>
        <p>送信に失敗しました。</p>
    <?php endif; ?>

    <p><a href="contact.php">お問い合わせフォームに戻る</a></p>
</body>
</html>
