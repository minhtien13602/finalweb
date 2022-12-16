<!DOCTYPE html>
<html lang="en" class="htmlAdmin">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="mybody4 bodytop">
    <div class="box1" style="min-height:100vh;">
        <div class="contain_login1">
            <form class="login-form1" method="POST" style="text-align: center;">
                <h2 style="text-align:center; margin-bottom:24px;">Trang chủ dành cho Admin</h2>
                <button class="actived wallet" name="list_1" ><a style="text-decoration: none" href="company_management.php">Quản lý danh sách công ty</a></button>
                <br>
                <button class="wait wallet" name="list_2" href="user_management.php"><a href="user_management.php" style="text-decoration: none">Quản lý danh sách người tìm kiếm việc làm</a></button>
                <br>
                <button class="wait1 wallet"><a href="job_management.php" style="text-decoration: none">Quản lý danh sách bài đăng</a></button>
                <br>
                <div class="button1">
                    <button id="logoutAdmin" name="log_out" class="btn_main effect"><span>Đăng xuất</span></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>