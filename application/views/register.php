<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Institute | Registration</title>

    <!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico')?>" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png')?>" />
    <!-- MOBILE SPECIFIC ============================================= -->

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href= "<?php echo base_url('assets/css/assets.css')?>">
    <!-- TYPOGRAPHY ============================================= -->
	<!-- <link rel="stylesheet" type="text/css" href= "<?php echo base_url('assets/css/typography.css')?>"> -->
    <!-- SHORTCODES ============================================= -->
	<!--<link rel="stylesheet" type="text/css" href= "<?php echo base_url('assets/css/shortcodes/shortcodes.css')?>"> -->
    <!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href= "<?php echo base_url('assets/css/register_style.css')?>">

    
</head>
<body>
    <!-- Page Started====================================================================================== -->
    
    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="<?php echo base_url('assets/images/logo_white.png');?>" alt=""/>
                        <h3  style=" font-family: 'Franklin Gothic Medium' ; color:#ffffff;">Welcome</h3>
                        <p>We will always support the success and dreams of your life. !</p>
                        <a href="<?php echo base_url('index.php/Welcome/load_login')?>" >
                            <input type="submit" name="" value="Login"/>
                        </a><br/>
                    </div>

                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading" style=" font-family: 'Franklin Gothic Medium'">Apply as a Student</h3>
                                <div class="register-msg">
                                    <?php echo $this->session->tempdata('msg'); ?>
                                </div>
                                <?php echo form_open(base_url('index.php/RegisterController/signup'))?>

                                <fieldset>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="txt_registerfullname" name="txt_registerfullname"  placeholder="Full Name *" value="" required/>
                                            <span class="text-danger"><?php echo form_error('txt_registerfullname'); ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="txt_registeraddress" name="txt_registeraddress" placeholder="Address *" value="" required/>
                                            <span class="text-danger"><?php echo form_error('txt_registeraddress'); ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="txt_registerPassword" name="txt_registerPassword" placeholder="Password *" value="" minlength="8" required/>
                                            <span class="text-danger"><?php echo form_error('txt_registerPassword'); ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="txt_registerCPassword" name="txt_registerCPassword" placeholder="Confirm Password *"  minlength="8" value="" required/>
                                            <span class="text-danger"><?php echo form_error('txt_registerCPassword'); ?></span>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                            $male=array('id'=>'2','name'=>'gender', 'value'=>'m');  
                                            $female=array('id'=>'3','name'=>'gender', 'value'=>'f');  
                                            echo "<label>Gender :&#160;&#160; </label>"." ".form_radio($male)."Male"."&#160;&#160;&#160;   ".form_radio($female)."Female"."<br>";
                                            ?>
                                            <span class="text-danger"><?php echo form_error('gender'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="txt_registerEmail" name="txt_registerEmail" placeholder="Your Email *" value="" required/>
                                            <span class="text-danger"><?php echo form_error('txt_registerEmail'); ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10"  id="txt_registerPhone" name="txt_registerPhone" class="form-control" placeholder="Your Phone *" value="" required/>
                                            <span class="text-danger"><?php echo form_error('txt_registerPhone'); ?></span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control"  name="state" id="state" required>
                                                <option value="" class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option value="What is your Birthdate?" >What is your Birthdate?</option>
                                                <option value="What is Your old Phone Number">What is Your old Phone Number</option>
                                                <option value="What is your Pet Name?">What is your Pet Name?</option>

                                                <?php if(!empty($states)): ?>
                                                <?php foreach ($states as $states): ?>                                                            
                                                    <option value="<?php echo $states['state_id'];?>"><?php echo $states['state_name'];?></option>
                                                <?php endforeach; ?>
                                                <?php endif;?>
                                            </select>
                                            <span class="text-danger"><?php echo form_error('state'); ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="txt_registeranswer" name="txt_registeranswer" placeholder="Enter Your Answer *" value="" required/>
                                            <span class="text-danger"><?php echo form_error('txt_registeranswer'); ?></span>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                    </fieldset>
                                <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="page-wraper"></div> -->
    <!-- Page Ended====================================================================================== -->
</body>
</html>