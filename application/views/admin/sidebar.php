<div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-user icon'></i>
        <div class="logo_name">ExpressAdmin</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="<?php echo base_url('index.php/Welcome/load_adminDash')?>">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="">
         <i class='bx bx-user' ></i>
         <span class="links_name">Student Management</span>
       </a>
       <span class="tooltip">Student Management</span>
     </li>
     <li>
       <a href="#class_mngt" id="classmngt-link">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Class Management</span>
       </a>
       <span class="tooltip">Class Management</span>
     </li>
     <li>
       <a href="#class_sheduling" id="classsheduling-link">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Class Scheduling</span>
       </a>
       <span class="tooltip">Class Scheduling</span>
     </li>
     <li>
       <a href="#finance" id="finance-link">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Finace Analytics</span>
       </a>
       <span class="tooltip">Finace Analytics</span>
     </li>
     <li>
       <a href="#course_mngt" id="course_mngt-link">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Course Management</span>
       </a>
       <span class="tooltip">Course Management</span>
     </li>
     <li>
       <a href="#feedbacks" id="feedbacks-link">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Feed Backs</span>
       </a>
       <span class="tooltip">Feed Backs</span>
     </li>
     <li>
       <a href="#notice" id="notice-link">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Notice</span>
       </a>
       <span class="tooltip">Notice</span>
     </li>
     <li>
       <a href="#setting" id="setting-link">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span><!-- for batch and course module create edit delete-->
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
     <a href="<?php echo base_url('index.php/LoginController/logout')?>">
         <div class="profile-details">
           <img src="<?php echo base_url('assets/images/profile.png');?>" alt="profileImg">
           <div class="name_job">
             <div class="name">Admin</div>
             <div class="job">Log Out</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
      </a>
      <span class="tooltip">Log Out</span>
     </li>
    </ul>
  </div>