<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    if($this->session->flashdata('logstatus') == "mode1"){
       base_url('index.php/Welcome/load_adminDash');
    }
    else{

?>
<!doctype html>
<html>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Express Institute | Login</title>

    <!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico')?>" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png')?>" />

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    

<style>
.register {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 4%;
    padding: 2%;
    width: 100%;
}

.register-left {
    text-align: center;
    color: #fff;
    margin-top: 4%;
}

.register-left input {
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 21%;
    margin-bottom: 3%;
    cursor: pointer;
}

.register-right {
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}

.register-left img {
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite alternate;
    animation: mover 1s infinite alternate;
}

@-webkit-keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-20px);
    }
}

@keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-20px);
    }
}

.register-left p {
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}

.register .register-form {
    padding: 10%;
    margin-top: 10%;
}

.btnRegister {
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 100%;
    cursor: pointer;
}

.forgot-pass{
    float: right;
}

.register .nav-tabs {
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}

.register .nav-tabs .nav-link {
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}

.register .nav-tabs .nav-link:hover {
    border: none;
}

.register .nav-tabs .nav-link.active {
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}

.register-heading {
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}</style>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
 </head>
        <body oncontextmenu='return false' class='snippet-body'>
        <div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="<?php echo base_url('assets/images/logo_white.png');?>" alt=""/>
            <h3>Welcome</h3>
            <p>We will always support the success and dreams of your life.!</p>
            <a href="<?php echo base_url('index.php/Welcome/load_register')?>" >
            <input type="submit" name="" value="Register" /></a><br />
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Admin</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
<!--====================================================================================================================
                Student login start
========================================================================================================================-->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Login as a Student</h3>                    
                    <div class="row register-form">
                        <div class="col-md-6">
                        <?php echo $this->session->tempdata('msg'); ?>

                        <?php echo form_open(base_url('index.php/LoginController/studentlogin'))?>
                        <fieldset>
                            <div class="form-group">
                                <input type="text" class="form-control" id="txt_studentusername" name="txt_studentusername" placeholder="Username *" value="" />
                                <span class="text-danger"><?php echo form_error('txt_studentusername'); ?></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="txt_studentPassword" name="txt_studentPassword" placeholder="Password *" value="" />
                                <span class="text-danger"><?php echo form_error('txt_studentPassword'); ?></span>
                            </div>
                            <br>
                            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                            <br><br><br>
                            <input type="submit" class="btnRegister" value="Login" />
                        </fieldset>    
                        <?php echo form_close();?>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/images/loginimg.svg');?>" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
<!--====================================================================================================================
                administrator login start
========================================================================================================================-->

                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Login as a Administrator</h3>
                    
                    <div class="row register-form">
                        <div class="col-md-6">
                            <?php echo $this->session->tempdata('msg'); ?>
                            <?php echo form_open(base_url('index.php/LoginController/adminlogin'))?>
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="txt_adminEmail" name="txt_adminEmail"  placeholder="Email *" value="" required/>
                                    <span class="text-danger"><?php echo form_error('txt_adminEmail'); ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="txt_adminPassword" name="txt_adminPassword" placeholder="Password *" value="" required/>
                                    <span class="text-danger"><?php echo form_error('txt_adminPassword'); ?></span>
                                </div>
                                <br>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                                <br><br><br>
                                <input type="submit" class="btnRegister" value="Login as Admin" />
                            </fieldset>    
                            <?php echo form_close();?>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/images/loginimg.svg');?>" alt="Image" class="img-fluid">  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
        <script type='text/javascript'></script>
</body>
</html>
<?php } ?>