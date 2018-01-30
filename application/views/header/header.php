<div id="left">
   <div class="media user-media bg-dark dker">
      <div class="user-media-toggleHover">
         <span class="fa fa-user"></span>
      </div>
      <div class="user-wrapper bg-dark">
         <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
               src="<?=base_url()?>img/admin.jpg">
            <p class="text-white user-info">Welcome Admin</p>
         </a>

      </div>
   </div>
   <!-- #menu -->
   <ul id="menu" class="bg-blue dker">
      <li class="<?php if (uri_string() == 'dashboard') echo "active";?>">
          <a href="<?=base_url('dashboard')?>">
         <i class="fa fa-home"></i>
         <span class="link-title">&nbsp;Dashboard</span>
         </a>
      </li>
	  
      <li class="<?php if (uri_string() == 'calendar') echo "active";?>">
          <a href="<?=base_url('calendar')?>">
         <i class="fa fa-calendar" aria-hidden="true"></i>
         <span class="link-title">&nbsp;Calendar</span>
         </a>
      </li>
      
      <li class="<?php if (uri_string() == 'view-employee' || uri_string() == 'employee-register' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp; Employee</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
            <li class="<?php if (uri_string() == 'employee-register') echo "active";?>">
                <a href="<?=base_url('employee-register')?>">
               <i class="fa fa-angle-right"></i> &nbsp; Register Employee
               </a>
            </li>
			<li class="<?php if (uri_string() == 'view-employee') echo "active";?>">
               <a href="<?=base_url('view-employee')?>">
               <i class="fa fa-angle-right"></i> &nbsp; View Employee
               </a>
            </li>
			<li class="<?php if (uri_string() == 'delete_views') echo "active";?>">
               <a href="<?=base_url('Employee/delete_views')?>">
               <i class="fa fa-angle-right"></i> &nbsp; Delete Employee
               </a>
            </li>
			<li class="<?php if (uri_string() == 'edit_views') echo "active";?>">
               <a href="<?=base_url('Employee/edit_views')?>">
               <i class="fa fa-angle-right"></i> &nbsp; Edit Employee
               </a>
            </li>
			
         </ul>
      </li>
      
	<li class="<?php if (uri_string() == 'shift-register' || uri_string() == 'view-shift' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp; Shift Allocation</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
			<li class="<?php if (uri_string() == 'shift-register') echo "active";?>">
                <a href="<?=base_url('shift-register')?>">
               <i class="fa fa-angle-right"></i> &nbsp; Shift Register 
               </a>
            </li>
			
            <li class="<?php if (uri_string() == 'view-shift') echo "active";?>">
               <a href="<?=base_url('view-shift')?>">
               <i class="fa fa-angle-right"></i> &nbsp; View Shift
               </a>
            </li>
         </ul>
      </li>
      
      
	<li class="<?php if (uri_string() == 'shift-attendance-register' || uri_string() == 'shift-view-attendance' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp; Shift Attendance</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
			<li class="<?php if (uri_string() == 'shift-attendance-register') echo "active";?>">
                <a href="<?=base_url('shift-attendance-register')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Shift Attendance Register 
               </a>
            </li>
			
            <li class="<?php if (uri_string() == 'shift-view-attendance') echo "active";?>">
               <a href="<?=base_url('shift-view-attendance')?>">
               <i class="fa fa-angle-right"></i> &nbsp; View Shift Attendance
               </a>
            </li>
         </ul>
      </li>
      
	<li class="<?php if (uri_string() == 'attendance-register' || uri_string() == 'view-attendance' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp; Attendance</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
			<li class="<?php if (uri_string() == 'attendance-register') echo "active";?>">
                <a href="<?=base_url('attendance-register')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Attendance Register 
               </a>
            </li>
			
            <li class="<?php if (uri_string() == 'view-attendance') echo "active";?>">
               <a href="<?=base_url('view-attendance')?>">
               <i class="fa fa-angle-right"></i> &nbsp; View Attendance
               </a>
            </li>
         </ul>
      </li>
	  
	<li class="<?php if (uri_string() == 'salary-register' || uri_string() == 'view-salary' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp; Salary</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
			<li class="<?php if (uri_string() == 'salary-register') echo "active";?>">
                <a href="<?=base_url('salary-register')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Salary Register 
               </a>
            </li>
			
            <li class="<?php if (uri_string() == 'view-salary') echo "active";?>">
               <a href="<?=base_url('view-salary')?>">
               <i class="fa fa-angle-right"></i> &nbsp; View Salary
               </a>
            </li>
         </ul>
      </li>
	  
	  <li class="<?php if (uri_string() == 'holiday-register' || uri_string() == 'view-holiday' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp; Holiday</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
			<li class="<?php if (uri_string() == 'holiday-register') echo "active";?>">
                <a href="<?=base_url('holiday-register')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Holiday Register 
               </a>
            </li>
			
            <li class="<?php if (uri_string() == 'view-holiday') echo "active";?>">
               <a href="<?=base_url('view-holiday')?>">
               <i class="fa fa-angle-right"></i> &nbsp; View Holiday
               </a>
            </li>
         </ul>
      </li>
      
      
   </ul>
   <!-- /#menu -->
</div>

