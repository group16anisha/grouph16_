<div class="preloader" style=" position: fixed;
   width: 100%;
   height: 100%;
   top: 0;
   left: 0;
   z-index: 100000;
   backface-visibility: hidden;
   background: #ffffff;">
   <div class="preloader_img" style="width: 200px;
      height: 200px;
      position: absolute;
      left: 48%;
      top: 48%;
      background-position: center;
      z-index: 999999">
      <img src="<?=base_url()?>img/loader.gif" style=" width: 40px;" alt="loading...">
   </div>
</div>
<div id="top">
   <!-- .navbar -->
   <nav class="navbar navbar-static-top">
      <div class="container-fluid m-0">
		  <a class="navbar-brand float-left text-center" href="<?=base_url()?>dashboard">
            <h4 class="text-white"><img src="<?=base_url()?>img/logow.png" class="admin_img" alt="logo">Anisha Construction Pvt Ltd</h4>
         </a>
         <div class="menu">
			 <select class="form-control" style="margin-top: -7px; width: 129px;">
				 <option value="admin">Admin</option>
				 <option value="employee">Employee</option>
			 </select>
<!--            <span class="toggle-left" id="menu-toggle">
            <i class="fa fa-bars text-white"></i>
            </span>-->
         </div>
         <div class="topnav dropdown-menu-right float-right">
            <div class="btn-group">
               <div class="user-settings no-bg">
                  <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                  <img src="<?=base_url()?>img/admin.jpg" class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong><?=$this->session->email?></strong>
                  <span class="fa fa-sort-down white_bg"></span>
                  </button>
                  <div class="dropdown-menu admire_admin">
                     <a class="dropdown-item" href="<?=base_url('logout')?>"><i class="fa fa-sign-out"></i>
                     Log Out</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.container-fluid --> 
   </nav>
   <!-- /.navbar -->
   <!-- /.head --> 
</div>

