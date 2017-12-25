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

						<!-- <div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					

						<!-- CONTENT HERE -->
