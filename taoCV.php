<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tạo CV</title>
    <link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
    textarea {
        resize: none;
        border: none;
        background-color: #f2f2f2;
        font-family: "Roboto", sans-serif;
        outline: 0;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" onclick="home()" style="margin-left: 50px;"><b>JopCV</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#job-new">Việc Làm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tạo CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#popular-company">Công Ty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer-contact">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <button class="btn btn-outline-light" type="button" onclick="dangtuyen()"
                        style="margin-right: 8px;">Đăng Tuyển</button>
                    <button class="btn btn-outline-light" id="btnlogin" type="button" onclick="login()"
                        style="width:auto;">Đăng Nhập</button>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        function home() {
            location.assign("index.php")
        }
        function dangtuyen() {
            location.assign("dangtuyen.php");
        }
        function login() {
            location.assign("login.php");
        }
    </script>

    <div class="login-page">
        <div class="form">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="html">Tên đầy đủ</label><br>
                                        <input type="text" name="hoten" placeholder="Tên đầy đủ" />
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="html">Email</label><br>
                                        <input type="text" name="email" placeholder="Email"/>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="html">Vị trí ứng tuyển</label>
                                        <input type="text" name="position" placeholder="Vị trí ứng tuyển" />
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="html">Giới thiệu bản thân</label><br>
                                        <textarea id = "textarea" type="text"  name="gioithieu " placeholder="Giới thiệu bản thân"rows="9" cols="65"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="container-fluid">
                                <div class="row">
                                    
                                    <div class="col-sm-12">
                                        <label for="html">Điện thoại</label><br>
                                        <input type="text" name="phone" placeholder="Điện thoại"/>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="html">Ngày sinh</label><br>
                                                    <input type="date" name="ngaysinh" placeholder="Ngày sinh"/>
                                                </div>
                                                <div class="col-sm-6" >
                                                        <div class="row gender-form">
                                                            <div class="col-sm-6">
                                                                <label class="radio">Nữ </label> <input  type="radio" id="gender" name="gender" value="nu">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="radio">Nam </label> <input type="radio" id="gender" name="gender" value="nam">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="html">Địa chỉ</label><br>
                                        <input type="text" name="thanhpho" placeholder="Địa chỉ"/>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="html">Kinh nghiệm</label><br>
                                        <textarea id = "textarea" type="text"  name="kinhnghiem" placeholder="Kinh Nghiệm"rows="3" cols="30"></textarea>
                                        <textarea id = "textarea" type="text"  name="kinhnghiem" placeholder="Kĩ năng khác"rows="3" cols="30"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" value="login">Xác nhận </button>
            </form>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>

</html>