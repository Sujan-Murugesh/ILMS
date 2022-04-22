<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Express Institute | Admin</title>

  <!-- FAVICONS ICON ============================================= -->
  <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png') ?>" />
  <!-- MOBILE SPECIFIC ============================================= -->

  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
  <link href='' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admindash_style.css') ?>">

  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#student_mngt").hide();
      $("#class_mngt").hide();
      $("#class_sheduling").hide();
      $("#finance").hide();
      $("#course_mngt").hide();
      $("#feedbacks").hide();
      $("#notice").hide();
      $("#setting").hide();
      $("#dashboard").show();

      // $(".nav .nav-link").on("click", function(){
      //     $(".nav").find(".active").removeClass("active");
      //     $(this).addClass("active");
      // });
    });
  </script>

</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-user icon'></i>
      <div class="logo_name">ExpressAdmin</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <!-- <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span> -->
      </li>
      <li>
        <a href="<?php echo base_url('index.php/Welcome/load_adminDash') ?>">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="<?php echo base_url('index.php/Welcome/studentmngt') ?>">
          <i class='bx bx-user'></i>
          <span class="links_name">Student Management</span>
        </a>
        <span class="tooltip">Student Management</span>
      </li>
      <li>
        <a href="#class_mngt" id="classmngt-link">
          <i class='bx bx-chat'></i>
          <span class="links_name">Class Management</span>
        </a>
        <span class="tooltip">Class Management</span>
      </li>
      <li>
        <a href="#class_sheduling" id="classsheduling-link">
          <i class='bx bx-heart'></i>
          <span class="links_name">Class Scheduling</span>
        </a>
        <span class="tooltip">Class Scheduling</span>
      </li>
      <li>
        <a href="#finance" id="finance-link">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Finace Analytics</span>
        </a>
        <span class="tooltip">Finace Analytics</span>
      </li>
      <li>
        <a href="#course_mngt" id="course_mngt-link">
          <i class='bx bx-folder'></i>
          <span class="links_name">Course Management</span>
        </a>
        <span class="tooltip">Course Management</span>
      </li>
      <li>
        <a href="#feedbacks" id="feedbacks-link">
          <i class='bx bx-cart-alt'></i>
          <span class="links_name">Feed Backs</span>
        </a>
        <span class="tooltip">Feed Backs</span>
      </li>
      <li>
        <a href="#notice" id="notice-link">
          <i class='bx bx-cart-alt'></i>
          <span class="links_name">Notice</span>
        </a>
        <span class="tooltip">Notice</span>
      </li>
      <li>
        <a href="#setting" id="setting-link">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span><!-- for batch and course module create edit delete-->
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li class="profile">
        <a href="<?php echo base_url('index.php/LoginController/logout') ?>">
          <div class="profile-details">
            <img src="<?php echo base_url('assets/images/profile.png'); ?>" alt="profileImg">
            <div class="name_job">
              <div class="name">Admin</div>
              <div class="job">Log Out</div>
            </div>
          </div>
          <i class='bx bx-log-out' id="log_out"></i>
        </a>
        <span class="tooltip">Log Out</span>
      </li>
    </ul>
  </div>

  <!--==================================================== DASHBOARD SECTION =================================================-->
  <!--==================//////////////=============================////////////////==================///////////////==========-->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <section class="home-section" id="dashboard">
    <div class="text">
      <img src="<?php echo base_url('assets/images/express_logosvg.svg'); ?>" style="width: 56px; height: 65px;" alt="Institute Logo">
      Dashboard
    </div>
    <div class="main-content">
      <div class="section__content section__content--p30">
        <div class="container-fluid">
          <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
              <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                    <div class="icon">
                      <i class='bx bx-group' id=""></i>
                    </div>
                    <div class="text">
                      <h2>10368</h2>
                      <span>Students</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                    <div class="icon">
                      <i class='bx bxs-graduation' id=""></i>
                    </div>
                    <div class="text">
                      <h2>388</h2>
                      <span>Online Students</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                    <div class="icon">
                      <i class='bx bx-arch' id=""></i>
                    </div>
                    <div class="text">
                      <h2>1,086</h2>
                      <span>Batches</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                    <div class="icon">
                      <i class='bx bx-dollar-circle' id=""></i>
                    </div>
                    <div class="text">
                      <h2>$1,060</h2>
                      <span>Total earnings</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="au-card recent-report">
                <div class="au-card-inner">
                  <h3 class="title-2">Recent Students</h3>
                  <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">
                      <thead>
                        <tr>
                          <!-- <th>#</th> -->
                          <th>Date</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data as $row) : ?>
                          <tr>

                            <td> <?php echo $row->join_at; ?></td>
                            <td> <?php echo $row->full_name; ?></td>
                            <td> <?php echo $row->phone_no; ?></td>
                            <td> <?php echo $row->email; ?></td>

                            <!--to add delete button -->
                            <td>
                              <a href="<?php echo base_url('index.php/LoginController/allowuser/' . $row->user_token); ?>">
                                <button type="button" class="btn btn-outline-success">Allow</button>
                              </a>
                              <a href="<?php echo base_url('index.php/LoginController/deletenewuser_data/' . $row->user_token); ?>">
                                <button type="button" class="btn btn-outline-danger">Block</button>
                              </a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                    <!-- <a href='deletenewuser_data?id=".$row->user_token."'> -->
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>
  <!-- DASHBOARD SECTION END -->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


  <!--====================================================STUDENT MANAGEMENT SECTION-=========================================-->
  <!--==================//////////////=============================////////////////==================///////////////==========-->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <section class="home-section" id="student_mngt">
    <div class="text"><img src="<?php echo base_url('assets/images/express_logosvg.svg'); ?>" style="width: 56px; height: 65px;" alt="Institute Logo">Student's Management</div>
  </section>
  <!-- STUDENT MANAGEMENT SECTION END -->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


  <!--====================================================CLASS   MANAGEMENT SECTION-=========================================-->
  <!--==================//////////////=============================////////////////==================///////////////==========-->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <section class="home-section" id="class_mngt">
    <div class="text"><img src="<?php echo base_url('assets/images/express_logosvg.svg'); ?>" style="width: 56px; height: 65px;" alt="Institute Logo">Class Management</div>
  </section>
  <!-- CLASS MANAGEMENT SECTION END -->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


  <!--====================================================CLASS  SHEDULING SECTION-=========================================-->
  <!--==================//////////////=============================////////////////==================///////////////==========-->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <section class="home-section" id="class_sheduling">
    <div class="text"><img src="<?php echo base_url('assets/images/express_logosvg.svg'); ?>" style="width: 56px; height: 65px;" alt="Institute Logo">Class Sheduling</div>
  </section>
  <!-- SHEDULING  SECTION END -->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


  <!--====================================================FINANCE  MANAGEMENT SECTION-=========================================-->
  <!--==================//////////////=============================////////////////==================///////////////==========-->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <section class="home-section" id="finance">

    <div class="text"><img src="<?php echo base_url('assets/images/express_logosvg.svg'); ?>" style="width: 56px; height: 65px;" alt="Institute Logo">
      Class Finance</div>
  </section>
  <!-- FINANCE MANAGEMENT SECTION END -->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


  <!--====================================================COURSE  MANAGEMENT SECTION-=========================================-->
  <!--==================//////////////=============================////////////////==================///////////////==========-->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <section class="home-section" id="course_mngt">
    <div class="text">
      <img src="<?php echo base_url('assets/images/express_logosvg.svg'); ?>" style="width: 56px; height: 65px;" alt="Institute Logo">Course Management
    </div>
  </section>
  <!-- COURSE MANAGEMENT SECTION END -->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


  <!--====================================================FEEDBACK  MANAGEMENT SECTION-=========================================-->
  <!--==================//////////////=============================////////////////==================///////////////==========-->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <section class="home-section" id="feedbacks">
    <div class="text">
      <img src="<?php echo base_url('assets/images/express_logosvg.svg'); ?>" style="width: 56px; height: 65px;" alt="Institute Logo">
      User Feedbacks
    </div>
  </section>
  <!-- FEEDBACK SECTION END -->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


  <!--====================================================NOTICE  MANAGEMENT SECTION-=========================================-->
  <!--==================//////////////=============================////////////////==================///////////////==========-->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <section class="home-section" id="notice">
    <div class="text">
      <img src="<?php echo base_url('assets/images/express_logosvg.svg'); ?>" style="width: 56px; height: 65px;" alt="Institute Logo">
      Notice
    </div>
  </section>
  <!-- NOTICE SECTION END -->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->


  <!--====================================================SETTINGS  MANAGEMENT SECTION-=========================================-->
  <!--==================//////////////=============================////////////////==================///////////////==========-->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <section class="home-section" id="setting">
    <div class="text">
      <img src="<?php echo base_url('assets/images/express_logosvg.svg'); ?>" style="width: 56px; height: 65px;" alt="Institute Logo">
      Settings
    </div>
  </section>
  <!-- SETTINGS SECTION END -->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->





  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <!-- Footer -->
  <footer class="page-footer font-small elegant-color">
    <div class="footer-copyright text-center py-3" style="color: #ffffff;">© 2020 Copyright Express Institute, Developer :
      <a href="https://msujan.netlify.app/"> Murugesh Sujan</a>
    </div>
  </footer>
  <!-- Footer -->

  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
      }
    }
  </script>



  <script type="text/javascript">
    $(document).ready(function() {

      $("#dashbord-link").click(function() {
        $("#dashboard").show();
        $("#student_mngt").hide();
        $("#class_mngt").hide();
        $("#class_sheduling").hide();
        $("#finance").hide();
        $("#course_mngt").hide();
        $("#feedbacks").hide();
        $("#notice").hide();
        $("#setting").hide();
      });

      $("#studentmngt-link").click(function() {
        $("#student_mngt").show();
        $("#dashboard").hide();
        $("#class_mngt").hide();
        $("#class_sheduling").hide();
        $("#finance").hide();
        $("#course_mngt").hide();
        $("#feedbacks").hide();
        $("#notice").hide();
        $("#setting").hide();
      });


      $("#classmngt-link").click(function() {
        $("#class_mngt").show();
        $("#student_mngt").hide();
        $("#dashboard").hide();
        $("#class_sheduling").hide();
        $("#finance").hide();
        $("#course_mngt").hide();
        $("#feedbacks").hide();
        $("#notice").hide();
        $("#setting").hide();
      });


      $("#classsheduling-link").click(function() {
        $("#class_sheduling").show();
        $("#student_mngt").hide();
        $("#dashboard").hide();
        $("#class_mngt").hide();
        $("#finance").hide();
        $("#course_mngt").hide();
        $("#feedbacks").hide();
        $("#notice").hide();
        $("#setting").hide();
      });


      $("#finance-link").click(function() {
        $("#finance").show();
        $("#student_mngt").hide();
        $("#dashboard").hide();
        $("#class_mngt").hide();
        $("#class_sheduling").hide();
        $("#course_mngt").hide();
        $("#feedbacks").hide();
        $("#notice").hide();
        $("#setting").hide();
      });


      $("#course_mngt-link").click(function() {
        $("#course_mngt").show();
        $("#student_mngt").hide();
        $("#dashboard").hide();
        $("#class_mngt").hide();
        $("#class_sheduling").hide();
        $("#finance").hide();
        $("#feedbacks").hide();
        $("#notice").hide();
        $("#setting").hide();
      });


      $("#feedbacks-link").click(function() {
        $("#feedbacks").show();
        $("#student_mngt").hide();
        $("#dashboard").hide();
        $("#class_mngt").hide();
        $("#class_sheduling").hide();
        $("#finance").hide();
        $("#course_mngt").hide();
        $("#notice").hide();
        $("#setting").hide();
      });

      $("#notice-link").click(function() {
        $("#notice").show();
        $("#student_mngt").hide();
        $("#dashboard").hide();
        $("#class_mngt").hide();
        $("#class_sheduling").hide();
        $("#finance").hide();
        $("#course_mngt").hide();
        $("#feedbacks").hide();
        $("#setting").hide();
      });


      $("#setting-link").click(function() {
        $("#setting").show();
        $("#student_mngt").hide();
        $("#dashboard").hide();
        $("#class_mngt").hide();
        $("#class_sheduling").hide();
        $("#finance").hide();
        $("#course_mngt").hide();
        $("#feedbacks").hide();
        $("#notice").hide();
      });

    });
  </script>

</body>

</html>