<?php

// MailHogで送信状況を確認
// http://localhost:8025/

$to = "send-to-address@sample.com";
$subject = "タイトル";
$message = "Hello!\r\nThis is TEST MAIL.（これはテストメールです）";
$headers = "From: from-address@sample.com";

$is_success = mail($to, $subject, $message, $headers);

if(!$is_success) {
  die('メール送信失敗');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>メール送信完了画面</title>
</head>
<body>
	<p>メール送信が完了しました。</p>
</body>
</html>