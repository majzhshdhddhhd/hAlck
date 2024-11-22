<?php
// التحقق من أن البيانات قد تم إرسالها عبر POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // الحصول على اسم المستخدم وكلمة المرور من النموذج
    $username = $_POST['username'];
    $password = $_POST['password'];

    // تحقق من كلمة المرور "88"
    if ($password == "88") {
        echo "مرحباً بك، " . htmlspecialchars($username) . "!";
    } else {
        echo "اسم المستخدم أو كلمة المرور غير صحيحة.";
    }
} else {
    // إذا كانت الصفحة قد تم تحميلها لأول مرة أو بدون إرسال البيانات
    ?>
    <html lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>تسجيل الدخول</title>
    </head>
    <body>
        <h2>تسجيل الدخول</h2>
        <form action="" method="POST">
            <label for="username">اسم المستخدم:</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">كلمة المرور:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="تسجيل الدخول">
        </form>
    </body>
    </html>
    <?php
}
?>

