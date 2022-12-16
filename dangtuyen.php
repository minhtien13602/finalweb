<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Đăng tuyển</title>
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
          <button class="btn btn-outline-light" type="button" onclick="dangtuyen()" style="margin-right: 8px;">Đăng Tuyển</button>
          <button class="btn btn-outline-light" id="btnlogin" type="button" onclick="login()" style="width:auto;">Đăng Nhập</button>
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
      </form>
      <form method="POST">
        <label for="html">Company's name</label><br>
        <input type="text" name="name" placeholder="Company's name" />
        <label for="html">Your Name</label><br>
        <input type="text" name="yourname" placeholder="Your Name" />
        <label for="html">Phone</label><br>
        <input type="text" name="phone" placeholder="Phone" />
        <label for="html">Contact</label><br>
        <input type="text" name="phone" placeholder="Contact" />
        <label for="html">Describe IT Requirements</label><br>
        <textarea id="textarea" type="text" name="requirements " placeholder="Describe IT Requirements " rows="15"
          cols="65"></textarea>
        <button type="submit" name="submit" value="login">Xác nhận </button>
      </form>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="js/index.js"></script>

</body>

</html>