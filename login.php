
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
      <link rel="stylesheet" href="css/style.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">       
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="margin-left: 50px;"><b>JopCV</b></a>
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
                        <button class="btn btn-outline-light" type="button" onclick="dangtuyen()" style="margin-right: 8px;">Đăng Tuyển</button>
                        <button class="btn btn-outline-light" id="btnlogin" type="button" onclick="login()" style="width:auto;">Đăng Nhập</button>
                    </ul>
                </div>
            </div>
        </nav>
        <script>
        function dangtuyen(){
            location.assign("dangtuyen.php");
        }
        function login(){
            location.assign("login.php");
        }
        </script>
  <div class="login-page">
  <div class="form">
    <form class="register-form">
    <input type="text" placeholder="email address"/>
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="password" placeholder="repeat password"/>
      <input type="text" placeholder="phone"/>
      <input type="text" placeholder="company"/>
      <input type="text" placeholder="field"/>
      <input type="text" placeholder="sex"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="POST">
      <input type="text" name="username" placeholder="email"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit" name="submit" value="login">Đăng nhập</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
