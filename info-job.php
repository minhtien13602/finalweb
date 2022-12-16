<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Cuoi Ky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link type="text/css" href="css/style.css" rel="stylesheet">
</head>

<body>
    <script>
        function dangtuyen() {
            location.assign("user-recruit.php");
        }
        function taoCV() {
            location.assign("user-create-cv.php");
        }
        function manageCV() {
            location.assign("user-manage-cv.php");
        }
    </script>
    <nav class="navbar navbar-expand-sm nav-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="margin-left: 50px;"><b>JobCV</b></a>
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
                    <button class="btn btn-outline-light" type="button" id="btn-dt" onclick="dangtuyen()"
                        style="margin-right: 20px;">Đăng Tuyển</button>

                    <a href="#" class="fas fa-user-circle" id="icon" onclick="manageCV()"></a>
                    <a id="hello-user">Hello User</a>
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
                        <div class="container-fluid">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#info_comp" style="color:white">Giới thiệu công ty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#jobs" style="color:white">Công việc</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0" style="margin-right:20px">
                                <button class="btn btn-outline-light" type="button" style="margin-right: 5px;">Chia
                                    sẻ</button>
                                <button class="btn btn-light" type="button" style="color: #e57373;">Theo dõi</button>
                            </form>
                        </div>
                    </nav>

                    <div id="infor_comp" class="container-fluid" style="padding:20px;">
                        <h4>Software Project Manager – Salary Up to $3500 <span><button class="btn btn-recruit" type="button">Ứng tuyển</button></span></h4>
                        <p>Salary: Lên tới 3.500 USD</p>
                        <p>Trách nhiệm công việc:
                            <br>
                            Coordinate internal resources and third parties/vendors for the flawless execution of projects
                            Ensure that all projects are delivered on-time, within scope and within budget
                            Assist in the definition of project scope and objectives, involving all relevant stakeholders and ensuring technical feasibility
                            Ensure resource availability and allocation
                            Develop a detailed project plan to monitor and track progress
                            Manage changes to the project scope, project schedule and project costs using appropriate verification techniques
                            Measure project performance using appropriate tools and techniques
                            Report and escalate to management as needed
                            Manage the relationship with the client and all stakeholders
                            Perform risk management to minimize project risks
                            Establish and maintain relationships with third parties/vendor
                            Create and maintain comprehensive project documentation
                            Meet with clients to take detailed ordering briefs and clarify specific requirements of each project
                            Track project performance, specifically to analyze the successful completion of short and long-term goals
                            Develop comprehensive project plans to be shared with clients as well as other staff members
                            Perform other related duties as assigned
                        </p>
                            
                    </div>

                    <div id="jobs-cpn" class="container-fluid" style="padding:20px; margin-top:20px">
                        <h2>Công việc</h2>
                        <ul class="nav flex-column">
                            <li class="nav-item1">
                                <a class="nav-link1" href="#">Fresher Software Engineer (Java)</a>
                                <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                                <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng
                                    tuyển</button>
                            </li>
                            <li class="nav-item1">
                                <a class="nav-link1" href="#">Chuyên Viên Tư Vấn Dịch Vụ Tài Khoản (Hồ Chí Minh)</a>
                                <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                                <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng
                                    tuyển</button>
                            </li>
                            <li class="nav-item1">
                                <a class="nav-link1" href="#">Graphic Designer (Thu Nhập Lên Tới 25M) </a>
                                <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                                <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng
                                    tuyển</button>
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
                            <li>18-month FAST TRACK to accelerate your career: becoming future Experts/Team Leads with
                                clear dual career path</li>
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