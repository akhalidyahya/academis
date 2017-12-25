		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<?php
					if ($this->session->userdata('role') == 'admin') { ?>
						<ul class="nav nav-list">
							<li class="<?php if($this->uri->segment(2) == ''){ echo 'active';} ?>">
								<a href="<?php echo base_url(); ?>index.php/admin">
									<i class="menu-icon fa fa-tachometer"></i>
									<span class="menu-text"> Dashboard </span>
								</a>
								<b class="arrow"></b>
							</li>

							<li class="<?php if($this->uri->segment(2) == 'view_guru'){ echo 'active';} ?>">
								<a href="<?php echo base_url(); ?>index.php/admin/view_guru">
									<i class="menu-icon fa fa-user"></i>
									<span class="menu-text"> Data guru </span>
								</a>
								<b class="arrow"></b>
							</li>

							<li class="<?php if($this->uri->segment(2) == 'view_siswa'){ echo 'active';} ?>">
								<a href="<?php echo base_url(); ?>index.php/admin/view_siswa">
									<i class="menu-icon fa fa-users"></i>
									<span class="menu-text"> Data Siswa </span>
								</a>
								<b class="arrow"></b>
							</li>

							<li class="<?php if($this->uri->segment(2) == 'view_kelas'){ echo 'active';} ?>">
								<a href="<?php echo base_url(); ?>index.php/admin/view_kelas">
									<i class="menu-icon fa fa-home"></i>
									<span class="menu-text"> Kelas </span>
								</a>
								<b class="arrow"></b>
							</li>

							<li class="<?php if($this->uri->segment(2) == 'view_mapel'){ echo 'active';} ?>">
								<a href="<?php echo base_url(); ?>index.php/admin/view_mapel">
									<i class="menu-icon fa fa-bookmark"></i>
									<span class="menu-text"> Mata Pelajaran </span>
								</a>
								<b class="arrow"></b>
							</li>

							<li class="<?php if($this->uri->segment(2) == 'view_rapot'){ echo 'active';} ?>">
								<a href="">
									<i class="menu-icon fa fa-book"></i>
									<span class="menu-text"> Rapot </span>
								</a>
								<b class="arrow"></b>
							</li>


							<li class="<?php if($this->uri->segment(2) == 'view_calendar'){ echo 'active';} ?>">
								<a href="<?php echo base_url(); ?>index.php/admin/view_calendar">
									<i class="menu-icon fa fa-calendar"></i>
									<span class="menu-text">
										Calendar
									</span>
								</a>

								<b class="arrow"></b>
							</li>

							<li class="<?php if($this->uri->segment(2) == 'view_pengumuman'){ echo 'active';} ?>">
								<a href="<?php echo base_url(); ?>index.php/admin/view_pengumuman">
									<i class="menu-icon fa fa-podcast"></i>
									<span class="menu-text"> Pengumuman </span>
								</a>
								<b class="arrow"></b>
							</li>

						</ul><!-- /.nav-list -->
					<?php }
				 ?>

				 <?php
 					if ($this->session->userdata('role') == 'guru') { ?>
 						<ul class="nav nav-list">
 							<li class="active">
 								<a href="<?php echo base_url(); ?>index.php/admin">
 									<i class="menu-icon fa fa-tachometer"></i>
 									<span class="menu-text"> Dashboard </span>
 								</a>
 								<b class="arrow"></b>
 							</li>

 							<li class="">
 								<a href="<?php echo base_url(); ?>index.php/admin/view_siswa">
 									<i class="menu-icon fa fa-users"></i>
 									<span class="menu-text"> Data Siswa </span>
 								</a>
 								<b class="arrow"></b>
 							</li>

 							<li class="">
 								<a href="rapot.html">
 									<i class="menu-icon fa fa-book"></i>
 									<span class="menu-text"> Rapot </span>
 								</a>
 								<b class="arrow"></b>
 							</li>


 							<li class="">
 								<a href="<?php echo base_url(); ?>index.php/admin/view_calendar">
 									<i class="menu-icon fa fa-calendar"></i>
 									<span class="menu-text">
 										Calendar
 									</span>
 								</a>

 								<b class="arrow"></b>
 							</li>

 							<li class="">
 								<a href="<?php echo base_url(); ?>index.php/admin/view_pengumuman">
 									<i class="menu-icon fa fa-podcast"></i>
 									<span class="menu-text"> Pengumuman </span>
 								</a>
 								<b class="arrow"></b>
 							</li>

 						</ul><!-- /.nav-list -->
 					<?php }
 				 ?>

				 <?php
 					if ($this->session->userdata('role') == 'ortu') { ?>
 						<ul class="nav nav-list">
 							<li class="active">
 								<a href="<?php echo base_url(); ?>index.php/admin">
 									<i class="menu-icon fa fa-tachometer"></i>
 									<span class="menu-text"> Dashboard </span>
 								</a>
 								<b class="arrow"></b>
 							</li>

							<li class="">
 								<a href="<?php echo base_url(); ?>index.php/admin/view_siswa">
 									<i class="menu-icon fa fa-users"></i>
 									<span class="menu-text"> Data Siswa </span>
 								</a>
 								<b class="arrow"></b>
 							</li>

 							<li class="">
 								<a href="rapot.html">
 									<i class="menu-icon fa fa-book"></i>
 									<span class="menu-text"> Rapot </span>
 								</a>
 								<b class="arrow"></b>
 							</li>

 							<li class="">
 								<a href="<?php echo base_url(); ?>index.php/admin/view_calendar">
 									<i class="menu-icon fa fa-calendar"></i>
 									<span class="menu-text">
 										Calendar
 									</span>
 								</a>

 								<b class="arrow"></b>
 							</li>

 						</ul><!-- /.nav-list -->
 					<?php }
 				 ?>

				 <?php
 					if ($this->session->userdata('role') == 'siswa') { ?>
 						<ul class="nav nav-list">
 							<li class="active">
 								<a href="<?php echo base_url(); ?>index.php/admin">
 									<i class="menu-icon fa fa-tachometer"></i>
 									<span class="menu-text"> Dashboard </span>
 								</a>
 								<b class="arrow"></b>
 							</li>

 							<li class="">
 								<a href="rapot.html">
 									<i class="menu-icon fa fa-book"></i>
 									<span class="menu-text"> Rapot </span>
 								</a>
 								<b class="arrow"></b>
 							</li>

 							<li class="">
 								<a href="<?php echo base_url(); ?>index.php/admin/view_calendar">
 									<i class="menu-icon fa fa-calendar"></i>
 									<span class="menu-text">
 										Calendar
 									</span>
 								</a>

 								<b class="arrow"></b>
 							</li>

 						</ul><!-- /.nav-list -->
 					<?php }
 				 ?>


				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active"><?php echo $title; ?></li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<!-- CONTENT HERE -->
