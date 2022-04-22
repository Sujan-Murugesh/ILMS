<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Institute | STUDENT MANAGEMENT</title>

    <!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico')?>" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png')?>" />
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href= "<?php echo base_url('assets/css/admindash_style.css')?>">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> 
   
    <!-- TO DO THE DATA TABLE -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>
<!--=====================================================================================================-->
<!--            PAGE BODY STARTED -->
<!--=====================================================================================================-->
<!-- SIDEBAR Section-->
<?php include_once('sidebar.php');?>
<!-- End SIDEBAR Section-->
<div class="home-section">
    <div class="text">
      <img src="<?php echo base_url('assets/images/express_logosvg.svg');?>"  style="width: 56px; height: 65px;" alt="Institute Logo">
        Student Management
    </div>
    <div class="topmenu shadow-lg p-3 mb-5 bg-body rounded" style="background-color: #ffffff;">
    <button type="button" class="btn btn-outline-primary" style="height: 40px; margin: 1px;">Register New Student</button>  
    <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#insert_student" aria-expanded="false" aria-controls="insert_student" style="height: 40px; margin: 1px; margin-right: 2px;">Approve New Student</button>
    </div>

    <div class="collapse" id="insert_student">
        <div class="card card-body" style="margin-left: 20px; margin-right: 20px;">
        <!-- new student approving form -->
        <header>
            <h3>Approving New Student Form.</h3>
        </header><hr>
        <?php echo $this->session->tempdata('msg');?>
        <?php echo form_open(base_url('index.php/AdminController/createuser'))?>
        <fieldset>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <small><label>Student Number</label></small>
                        <input type="text" class="form-control" id="txt_stno" name="txt_stno"  placeholder="Student Number" value="<?php echo $autogen; ?>"  readonly required/>
                        <span class="text-danger"><?php echo form_error('txt_stno'); ?></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <small><label>Student Name</label></small>
                        <input type="text" class="form-control" id="txt_stname" name="txt_stname"  placeholder="Full Name *" value="" required/>
                        <span class="text-danger"><?php echo form_error('txt_stname'); ?></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <small><label>Student Password</label></small>
                        <input type="password" class="form-control" id="txt_stpwd" name="txt_stpwd"  placeholder="Password" value="" minlength="8" required/>
                        <span class="text-danger"><?php echo form_error('txt_stpwd'); ?></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                    <small><label>Student Batch</label></small>
                    <select class="form-control"  name="batch" id="batch" required>
                    <option value="" class="hidden"  selected disabled>Select a batch</option>
                    <?php foreach ($batches as $each): ?>
                        <option value="<?php echo $each->batch_name; ?>"><?php echo $each->batch_name; ?></option>;
                    <?php endforeach; ?>
                    </select>
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-outline-success">Create a new Student Account</button>
                </div>
            </div>
            </fieldset>
        <?php echo form_close();?>
        </div>
    </div>
	<div class="main-content">
                <div class="section__content section__content--p30 mt-2 ml-2 mr-2">
                    <div class="container-fluid">
							<!-- data student table -->
						<div class="row">
							<div class="col-lg-12">
								<div class="au-card recent-report">
									<div class="au-card-inner">		
										<h3 class="title-2">Student Details</h3>
												
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	</div>
    

</div>
<!--=====================================================================================================-->
<!--            PAGE FOOTER STARTED -->
<!--=====================================================================================================-->
<?php include_once('footer.php');?>
<!--_____________________________________________________________________________________________________-->
<!--=====================================================================================================-->
<!--            JS FOR SIDE BAR ANIMATIONS -->
<!--=====================================================================================================-->
    <script>
            let sidebar = document.querySelector(".sidebar");
            let closeBtn = document.querySelector("#btn");
            let searchBtn = document.querySelector(".bx-search");

            closeBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("open");
                menuBtnChange();//calling the function(optional)
            });

            searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
                sidebar.classList.toggle("open");
                menuBtnChange(); //calling the function(optional)
            });

            // following are the code to change sidebar button(optional)
            function menuBtnChange() {
            if(sidebar.classList.contains("open")){
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
            }else {
                closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
            }
            }
    </script>
<!--=====================================================================================================-->
</body>
</html>