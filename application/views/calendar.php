<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee Shift Schedule</title>
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/components.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/custom.css"/>
    <!-- end of global styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>vendors/fullcalendar/css/fullcalendar.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/calendar_custom.css" />

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
                    <div class="col-sm-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-calendar"></i>
                            Calendar
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12">
                        <ol  class="breadcrumb float-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>dashboard">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="active breadcrumb-item">Calendar</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-light lter bg-container cal_btn_hov">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block m-t-35">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /.outer -->
        </div>
        <!-- /#content -->
    </div>
    </div>
    
</div>

<script type="text/javascript" src="<?=base_url()?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/custom.js"></script>
<!-- end of global scripts-->
<!--plugin script-->
<script type="text/javascript" src="<?=base_url()?>vendors/moment/js/moment.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/fullcalendar/js/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/pluginjs/calendarcustom.js" ></script>
<!-- end of plugin scripts -->
<!--<script type="text/javascript" src="<?=base_url()?>js/pages/calendar.js"></script>-->
<script>
	 if ($('#calendar').length) {
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var calendar = $('#calendar').fullCalendar({
				 
					displayEventTime: false,
				
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay'
					},
					buttonText: {
						prev: "",
						next: "",
						today: 'Today',
						month: 'Month',
						week: 'Week',
						day: 'Day'
					},
				
				
				events: [
					
					<?php
						foreach ($getHoliday as $holiday)
						{ 
							$start_day = date('d', strtotime($holiday->holDate));
							$smonth = date('n', strtotime($holiday->holDate));
							$start_month = $smonth - 1;
							$start_year = date('Y', strtotime($holiday->holDate));
							$end_year = date('Y', strtotime($holiday->holDate));
							$end_day = date('d', strtotime($holiday->holDate));
							$emonth = date('n', strtotime($holiday->holDate));
							$end_month = $emonth - 1;
							?>
							{
								title: "Holiday: <?=$holiday->holName?>",
								start: new Date(<?php echo $start_year . ',' . $start_month . ',' . $start_day; ?>),
								end: new Date(<?php echo $end_year . ',' . $end_month . ',' . $end_day; ?>),
								color: '#8A2BE2',
								url: '<?= base_url()?>view-attendance?date=<?= $holiday->holDate ?>',
							},
							
					<?php	}
					?>
									
					<?php
						foreach ($getAttendance as $attendance)
						{ 
							$start_day = date('d', strtotime($attendance->attDate));
							$smonth = date('n', strtotime($attendance->attDate));
							$start_month = $smonth - 1;
							$start_year = date('Y', strtotime($attendance->attDate));
							$end_year = date('Y', strtotime($attendance->attDate));
							$end_day = date('d', strtotime($attendance->attDate));
							$emonth = date('n', strtotime($attendance->attDate));
							$end_month = $emonth - 1;
							?>
							{
								title: "Attendence: <?=$attendance->empFirstName?>",
								start: new Date(<?php echo $start_year . ',' . $start_month . ',' . $start_day; ?>),
								end: new Date(<?php echo $end_year . ',' . $end_month . ',' . $end_day; ?>),
								color: 'green',
								url: '<?= base_url()?>view-attendance?date=<?= $attendance->attDate ?>',
							},
							
					<?php	}
					?>
									
					<?php
						foreach ($getShift as $shift)
						{ 
							$start_day = date('d', strtotime($shift->aloDay));
							$smonth = date('n', strtotime($shift->aloDay));
							$start_month = $smonth - 1;
							$start_year = date('Y', strtotime($shift->aloDay));
							$end_year = date('Y', strtotime($shift->aloDay));
							$end_day = date('d', strtotime($shift->aloDay));
							$emonth = date('n', strtotime($shift->aloDay));
							$end_month = $emonth - 1;
							?>
							{
								title: "Shift Allocation: <?=$shift->empFirstName?>",
								start: new Date(<?php echo $start_year . ',' . $start_month . ',' . $start_day; ?>),
								end: new Date(<?php echo $end_year . ',' . $end_month . ',' . $end_day; ?>),
								color: 'red',
								url: '<?= base_url()?>view-shift?date=<?= $shift->aloDay ?>',
							},
							
					<?php	}
					?>
					<?php
						foreach ($getShiftAttendance as $shiftatte)
						{ 
							$start_day = date('d', strtotime($shiftatte->aloDay));
							$smonth = date('n', strtotime($shiftatte->aloDay));
							$start_month = $smonth - 1;
							
							$start_year = date('Y', strtotime($shiftatte->aloDay));
							
							$end_year = date('Y', strtotime($shiftatte->aloDay));
							$end_day = date('d', strtotime($shiftatte->aloDay));
							
							$emonth = date('n', strtotime($shiftatte->aloDay));
							$end_month = $emonth - 1;
							?>
							{
								title: "Shift Attendance: <?=$shiftatte->empFirstName?>",
								start: new Date(<?php echo $start_year . ',' . $start_month . ',' . $start_day; ?>),
								end: new Date(<?php echo $end_year . ',' . $end_month . ',' . $end_day; ?>),
								color: '#D2691E',
								url: '<?= base_url()?>shift-view-attendance?date=<?= $shiftatte->aloDay ?>',
							},
							
					<?php	}
					?>
						
				],
				eventColor: '#3A87AD',
			});
		}
</script>


</body>
</html>
