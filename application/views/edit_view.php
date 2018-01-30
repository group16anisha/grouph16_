<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee Delete</title>
    <?php
       $this->load->view('header/link');
    ?>
	     <link type="text/css" rel="stylesheet" href="<?=base_url()?>vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/dataTables.bootstrap.css" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/tables.css" />
    
       

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
                        <div class="col-lg-6 col-sm-4">
                            <h4 class="nav_top_align">
                            <i class="fa fa-fw fa-folder-open"></i>
                            Employee Edit / Update
                        </h4>
                        </div>
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="<?=base_url('dashboard')?>">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Employee</a>
                                </li>
                                <li class="active breadcrumb-item">Employee Edit / Update </li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-white">
                                Employee List
                            </div>
                            <div class="card-block m-t-35" id="user_body">
                                
                        <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
                            <div role="alert" class="alert alert-success">
                                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                    <strong>Well done!!</strong> <?=$this->session->flashdata('SUCCESSMSG')?>
                            </div>
                        <?php } ?>
                                
                                <div class="table-toolbar">

                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th style="display: none;">id</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Employee ID</th>
													<th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">First Name</th>
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Last Name</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Employee ID</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Email</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Mobile</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Birth Date</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Address</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Created Date</th>
													<th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!empty($getEmployee))
                                                {
													foreach ($getEmployee as $value)
													{ ?>
														<tr>
															<td><?=$value->empID?></td>
															<td><?=$value->empFirstName?></td>
															<td><?=$value->empLastName?></td>
															<td><?=$value->empNO?></td>
															<td><?=$value->empemail?></td>
															<td><?=$value->empMobile?></td>
															<td><?=$value->empbdate?></td>
															<td><?=$value->empaddress?></td>
															<td><?=$value->created_date?></td>
															<td><a href="<?php echo base_url() . "Employee/rowEdit/" . $value->empID; ?>">Update</a></td>
																												</tr>	
												<?php	}
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
    </div>
    
</div>
<script type="text/javascript" src="<?=base_url()?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/custom.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/select2/js/select2.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/pages/users.js"></script>  

<script>
$(document).ready(function() {

});
</script>


</body>
</html>