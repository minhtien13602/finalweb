<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin công ty tuyển dụng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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

    <div class="container-fluid mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <img src="./images/ngan-hang-techcombank.jpg" alt="techcombank" width="800" height="400">
                    <nav class="navbar navbar-expand-sm " style="margin-top:20px" style="background-color: #e57373;">
                        <div class="container-fluid" >
                            <ul class="navbar-nav" >
                            <li class="nav-item">
                                <a class="nav-link" href="#info_comp" style="color:white">Giới thiệu công ty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#jobs" style="color:white">Công việc</a>
                            </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0" style="margin-right:20px">
                                <button class="btn btn-outline-light" type="button" style="margin-right: 5px;">Chia sẻ</button>
                                <button class="btn btn-light" type="button" style="color: #e57373;">Theo dõi</button>
                            </form>
                        </div>
                    </nav>

                    <div id="infor_comp" class="container-fluid" style="padding:20px;">
                        <h2>Giới thiệu công ty</h2>
                        <p>Techcombank mang sứ mệnh dẫn dắt hành trình số hóa của ngành tài chính, tạo động lực cho mỗi cá nhân, doanh nghiệp và tổ chức phát triển bền vững và bứt phá thành công.
                            <br>
                            Được thành lập vào tháng 9 năm 1993 và có trụ sở chính tại Hà Nội, Techcombank là một trong những ngân hàng thương mại cổ phần lớn nhất tại Việt Nam và là một trong những tổ chức ngân hàng hàng đầu tại Châu Á.
                            Chúng tôi có hơn 12.000 nhân viên và 9.6 triệu khách hàng bán lẻ và khách hàng doanh nghiệp tại Việt Nam. Mạng lưới rộng khắp của chúng tôi gồm 309 chi nhánh và phòng giao dịch trên 45 tỉnh thành.
                            Techcombank là ngân hàng thương mại tư nhân đầu tiên tại Việt Nam gia nhập “câu lạc bộ tỷ đô” năm 2021, với lợi nhuận trước thuế (LNTT) đạt 23,2 nghìn tỷ đồng, tăng 47,1% so với 2020. Đây là năm thứ năm liên tiếp Techcombank ghi nhận lợi nhuận tăng trưởng hai chữ số. Ngân hàng cũng ghi nhận tốc độ tăng trưởng kép lợi nhuận trong giai đoạn 2016-2021 với mức kỷ lục 50%/năm.
                            Bằng cách không ngừng truyền cảm hứng cho mỗi tài năng của chúng tôi để ‘Dare to Be a Greater You’, chúng tôi đặt mục tiêu trở thành ngân hàng số 1 Việt Nam với vốn hóa 20 tỷ USD.
                        </p>
                    </div>

                    <div id="jobs-cpn" class="container-fluid" style="padding:20px; margin-top:20px">
                        <h2>Công việc</h2>
                        <ul class="nav flex-column">
                            <li class="nav-item1">
                                <a class="nav-link1" href="#">Fresher Software Engineer (Java)</a>
                                <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                                <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng tuyển</button>
                            </li>
                            <li class="nav-item1">
                                <a class="nav-link1" href="#">Chuyên Viên Tư Vấn Dịch Vụ Tài Khoản (Hồ Chí Minh)</a>
                                <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                                <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng tuyển</button>
                            </li>
                            <li class="nav-item1">
                                <a class="nav-link1" href="#">Graphic Designer (Thu Nhập Lên Tới 25M) </a>
                                <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                                <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng tuyển</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div id="add_comp" style="padding:20px; margin-top:20px">
                        <b>Website</b>
                        <br>
                        <a href="https://www.techcombank.com.vn" style="color: red;">https://www.techcombank.com.vn</a>
                        <br>
                        <b>Địa chỉ công ty</b>
                        <ul>
                            <li>Số 191 Bà Triệu, Phường Lê Đại Hành, Quận Hai Bà Trưng, Thành phố Hà Nội</li>
                            <li>Số 9-11 Tôn Đức Thắng, Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh</li>
                        </ul>
                        <b>Quy mô</b>
                        <p>Over 1000</p>
                        <b>Ngành nghề</b>
                        <p>Ngân hàng</p>
                        <b>Đãi ngộ của công ty</b>
                        <ul>
                            <li>Starting SALARY: $1,000</li>
                            <li>18-month FAST TRACK to accelerate your career: becoming future Experts/Team Leads with clear dual career path</li>
                            <li>Rotations in numerous INITITIVE PROJECTS with total investments up to $500 million</li>
                            <li>Curate LEARNING ROADMAP: Leadership, Job Shadowing, Technical trainings</li>
                            <li>Instant FEEDBACKS/MENTORING with RECOGNITION</li>
                            <li>Working time: Mon-Fri</li>
                        </ul>
                    </div>
                </div>
            </div>  
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <b style="font-size: 30px; color: white">JobCV</b>
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