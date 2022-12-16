<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Web Cuoi Ky</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <link type="text/css" href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-expand-sm nav-1">
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
                            <a class="nav-link" href="#" onclick="taoCV()">Tạo CV</a>
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
        function taoCV(){
            location.assign("taoCV.php");
        }
        </script>
        <!--Search-->
        <form class="d-flex" style="margin-top: 5px">
            <input class="form-control me-2"  id="text-search" type="text" placeholder="Tìm Kiếm Việc Làm" style="margin-left: 50px;">
            <div class="fgroup group1">
                <select class="select-style" name="place" id="select-place" style="margin-right: 8px; width: 200px; height: 40px;">
                    <option value="TP HCM" >TP HCM</option>
                    <option value="Hà Nội">Hà Nội</option>
                    <option value="Đà Nẵng">Đà Nẵng</option>
                    <option value="Quy Nhơn">Quy Nhơn</option>
                </select>
            </div>
            <button class="btn" id="btn-search" type="button" style ="margin-right: 10px; width: 150px;"">Tìm Kiếm</button>
        </form>

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-sm-6 mt-2">
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                       <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>
                        
                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./images/banner1.jpg" alt="" class="d-block" style="height: 405px; width: 680px;">
                                <div class="carousel-caption">
                                    <h3>Cơ Hội Tìm Kiếm Việc Làm</h3>
                                    <p>Với nhiều loại công việc khác nhau!</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="./images/banner2.jpg" alt="" class="d-block" style="height: 405px; width:680px;">
                                <div class="carousel-caption">
                                    <h3>Công Ty</h3>
                                    <p>Được làm việc với những công ty hàng đầu</p>
                                </div> 
                            </div>
                            <div class="carousel-item">
                                <img src="./images/banner3.jpg" alt="" class="d-block" style="height: 405px; width: 680px;">
                                <div class="carousel-caption">
                                    <h3>Môi Trường Làm Việc</h3>
                                    <p>Linh hoạt và năng động.</p>
                                </div>  
                            </div>
                        </div>
                        
                        <!-- Left and right controls/icons -->
                         <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

                <div class="col-sm-2 mt-2">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <img src="./images/cpn1.jpg" alt=""  style="height: 75px; width: 150px;">
                        </li>
                        <li class="list-group-item">
                            <img src="./images/cpn2.jpg" alt="">
                        </li>
                        <li class="list-group-item">
                             <img src="./images/cpn4.jpg" alt="">
                        </li>
                    </ul>
                </div>

                <!--Job Hot-->

                <div class="col-sm-4">
                    <h3>Công Việc Hot Hôm Nay</h3>
                    <ul class="list-group">
                        <li class="list-group-item" style="height: 120px;">
                            <h6>Taggle Pte. Ltd.</h6>
                            <p ><b>Senior Unity3d Developer</b></p>
                            <p><i class="salary">30.000.000 VND to 40.000.000 VND</i> <a href="#" class="see-more" style="padding-left: 40px; ">See More</a></p>
                        </li>
                        <li class="list-group-item" style="height: 130px;">
                            <h6>WebLife</h6>
                            <p><b>Mid/Senior Back-end Dev (NodeJS/ PHP) - 13th month salary bonus onboard before Tet</b></p>
                            <p><i class="salary">1.000 USD to 2.000 USD</i> <a href="#" class="see-more" style="padding-left: 120px;">See More</a></p>
                        </li>
                        <li class="list-group-item" style="height: 120px;">
                            <h6>Ninja Van Tech Lab VN</h6>
                            <p><b>Senior UX Designer</b></p>
                            <p><i class="salary">Negotiable</i> <a href="#" class="see-more" style="padding-left: 210px;">See More</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Doanh Nghiệp nổi bậc-->

        <div class="container-fluid mt-3">
            <div class="row bg-dn">
                <h4>Doanh Nghiệp Nổi Bật</h4>
                <div class="col-sm-3 mb-3">
                    <span><a href="#"><img src="./images/ntd2.jpg" alt=""></a><b class="name-dn">LAIDON GROUP</b> </span>
                </div>
                <div class="col-sm-3 mb-3">
                    <span><a href="#"><img src="./images/ntd3.jpg" alt=""></a><b class="name-dn">NEC VIETNAM</b> </span>
                    
                </div>
                <div class="col-sm-3 mb-3">
                    <span><a href="#"><img src="./images/ntd4.jpg" alt=""></a><b class="name-dn">NGÂN HÀNG Á CHÂU</b> </span>
                    
                </div>
                <div class="col-sm-3 mb-3">
                    <span><a href="#"><img src="./images/ntd5.jpg" alt=""></a><b class="name-dn">MGM TECHNOLOGY</b> </span>
                    
                </div>
                
            </div>
        </div>

        <!--Popular Company-->

        <div class="container-fluid mt-3" id="popular-company">
            <div class="row">
                <h4>Popular Company</h4>
                <div class="col-sm-3 mt-3">
                    <div class="card" >
                        <img class="card-img-top" src="./images/company/cpn1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Korean IT Company</h4>
                            <p class="card-text"><br></p>
                            <p>Hồ Chí Minh, Hà Nội</p>
                            <a href="#" class="btn btn-color">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <div class="card" >
                        <img class="card-img-top" src="./images/company/cpn2.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Senior QA Engineer</h4>
                            <p class="card-text salary">Salary: Negotiable </p>
                            <p>Quận Đống Đa, Hà Nội</p>
                            <a href="#" class="btn btn-color">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <div class="card" >
                        <img class="card-img-top" src="./images/company/cpn3.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Java Software Engineer</h4>
                            <p class="card-text salary" >Salary: Negotiable</p>
                            <p>Quận 1, TP HCM</p>
                            <a href="#" class="btn btn-color">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <div class="card" >
                        <img class="card-img-top" src="./images/company/cpn4.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">BOS DEVELOPER</h4>
                            <p class="card-text  salary" >Salary: Up to 3.500 USD</p>
                            <p>Quận Bình Thạnh, TP HCM</p>
                            <a href="#" class="btn btn-color">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <div class="card" >
                        <img class="card-img-top" src="./images/company/cpn5.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Senior Database</h4>
                            <p class="card-text salary" >Salary: Negotiable</p>
                            <p>Quận 12, TP.HCM</p>
                            <a href="#" class="btn btn-color">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <div class="card" >
                        <img class="card-img-top" src="./images/company/cpn6.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">FullStack Developer</h4>
                            <p class="card-text salary" >Salary: Negotiable</p>
                            <p>Quận Tân Bình, TP HCM</p>
                            <a href="#" class="btn btn-color">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <div class="card" >
                        <img class="card-img-top" src="./images/company/cpn7.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 22px;">Software Engineer (Java)</h4>
                            <p class="card-text salary" >Salary: 15.000.000 VNĐ</p>
                            <p>Quận 1, TP HCM</p>
                            <a href="#" class="btn btn-color">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <div class="card" >
                        <img class="card-img-top" src="./images/company/cpn8.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">BOS DEVELOPER</h4>
                            <p class="card-text salary" >Salary: Up to 3.500 USD</p>
                            <p>Quận Bình Thạnh, TP HCM</p>
                            <a href="#" class="btn btn-color">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Job New-->

        <div class="container-fluid mt-3" id="job-new">
        <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 bg-job">
                    <h4 class="mt-2">Công Việc Mới</h4>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4 mt-2 mb-2">
                                <div class="card" >
                                    <div class="card-body" style="margin-bottom: -20px;">
                                        <h6 class="card-title"> <a class="text-job" href="">Software Engineer (Java)</a> <span "><a href="" class="icon-heart fas fa-heart"></a></span></h6>
                                        <p class="card-text"><b><a class="text-job" href="">Company: Techcombank</a></b></p>
                                        <p class="salary"><i>Salary: 15.000.000 VND</i></p>
                                        <p>Quận Hai Bà Trưng, TP Hà Nội</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-2 mb-2">
                                <div class="card" >
                                    <div class="card-body" style="margin-bottom: -20px;">
                                        <h6 class="card-title"> <a href="" class="text-job">Senior Unity3d Developer</a> <span><a href="" class="icon-heart fas fa-heart"></a></span></h6>
                                        <p class="card-text"><b><a href="" class="text-job">Company: Taggle Pte. Ltd.</a></b></p>
                                        <p class="salary"><i>Salary: 40.000.000 VND</i></p>
                                        <p>Quận Tân Bình, TP HCM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-2 mb-2">
                                <div class="card" >
                                    <div class="card-body" style="margin-bottom: -20px;">
                                        <h6 class="card-title"> <a href="" class="text-job">SeniorSenior UX Designer</a> <span "><a href="" class="icon-heart fas fa-heart"></a></span></h6>
                                        <p class="card-text"><b><a href="" class="text-job">Company: Ninja Van Tech Lab VN</a></b></p>
                                        <p class="salary"><i>Salary: Negotiable</i></p>
                                        <p>Quận Tân Bình, TP HCM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-2 mb-2">
                                <div class="card" >
                                    <div class="card-body" style="margin-bottom: -20px;">
                                        <h6 class="card-title"><a href="" class="text-job">FullStack Developer</a> <span "><a href="" class="icon-heart fas fa-heart" ></a></span></h6>
                                        <p class="card-text"><b><a href="" class="text-job">Company: Techcombank</a></b></p>
                                        <p class="salary"><i>Salary: 15.000.000 VND</i></p>
                                        <p>Quận Hai Bà Trưng, TP Hà Nội</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>


        <div class="footer mt-3" id="footer-contact">
            <div class="container text-footer">
                <b style="font-size: 30px;">JobCV</b>
                <p>Số 19, đường Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, Thành phố Hồ Chí Minh
                <br>
                    Liên hệ: 0357766990 - contact@jobcv.vn
                <br> 
                    Copyright &copy; 2022 Tìm kiếm việc làm JobCV
                </p>
            </div>
        </div>
        

    </body>

</html>