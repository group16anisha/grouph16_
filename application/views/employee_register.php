<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee Shift Schedule</title>
    <?php
       $this->load->view('header/link');
    ?>

</head>

<body class="body">

<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
	<?php
       $this->load->view('header/top_header');
    ?>
        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">
        <?php
       $this->load->view('header/header');
       ?>
        <!-- /#left -->
         <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-5 col-lg-6 skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil"></i>
							Employee Register
                        </h4>
                    </div>
                    <div class="col-sm-7 col-lg-6">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>dashboard">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Employee</a>
                            </li>
                            <li class="active breadcrumb-item">Employee Register</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container forms">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                   Employee Register Form
                                </div>
                                <div class="card-block">
					<?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
					<div role="alert" class="alert alert-success">
					   <button data-dismiss="alert" class="close" type="button">
						   <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
					   <strong>Well done!</strong>
					   <?= $this->session->flashdata('SUCCESSMSG') ?>
					</div>
					<?php } ?>
									<form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>First Name <span style="color: #cc0000">*</span></h5>
											<input required type="text" class="form-control" name="firstname" value=""/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Last Name <span style="color: #cc0000">*</span></h5>
											<input required type="text" class="form-control" name="lastname" value=""/>
                                        </div>
										
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Employee ID <span style="color: #cc0000">*</span></h5>
											<input required type="text" class="form-control" name="employee_id" value=""/>
                                        </div>
                                    </div>
									
                                    <div class="row">
										<div class="col-lg-4 input_field_sections">
                                            <h5>Email <span style="color: #cc0000">*</span></h5>
											<input required  type="email" class="form-control" name="email" value=""/>
                                        </div>
										
									    <div class="col-lg-4 input_field_sections">
                                            <h5>Mobile <span style="color: #cc0000">*</span></h5>
											<input required="" type="text" class="form-control" name="mobile" value=""/>
                                        </div>
										
										<div class="col-lg-4 input_field_sections">
                                            <h5>Birth Date <span style="color: #cc0000">*</span></h5>
											<input required="" type="text" class="form-control datepicker" name="birth_date" value=""/>
                                        </div>
                                        
                                    </div>
									
                                    <div class="row">
										<div class="col-lg-8 input_field_sections">
                                            <h5>Address <span style="color: #cc0000">*</span></h5>
											<textarea required="" name="address" class="form-control"></textarea>
									    </div>
						            </div>
									
                                    <div class="row">
										<div class="col-lg-8 input_field_sections">
											<button type="submit" class="btn btn-primary">Save</button>
									    </div>
						            </div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>

                 
                    

                </div>
                <!-- /.outer -->
            </div>
        </div>
    </div>
    
</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="<?=base_url();?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/custom.js"></script>
<!-- global scripts end-->

<script type="text/javascript" src="<?=base_url();?>vendors/raphael/js/raphael-min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/d3/js/d3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/c3/js/c3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/toastr/js/toastr.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.js" ></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.time.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotspline/js/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.categories.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/jquery_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/countUp.js/js/countUp.min.js"></script>

<!--end of plugin scripts-->

<script type="text/javascript" src="<?=base_url();?>js/jquery-ui.js"></script>
<!--end of plugin scripts-->
  <script>
  $( function() {
	  $( ".datepicker" ).datepicker({
			dateFormat: "yy-mm-dd"
		});
  });
  </script>

</body>
</html>
