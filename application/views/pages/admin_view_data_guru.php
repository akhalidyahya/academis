					<div class="page-content">
						<div class="page-header">
							<h1>
								Data Guru
							</h1>

							<div style="margin:15px 0px 0px 0px;">
								<div class="nav-search" id="nav-search">
									<form class="form-search">
										<span class="input-icon">
											<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
											<i class="ace-icon fa fa-search nav-search-icon"></i>
										</span>
									</form>
								</div><!-- /.nav-search -->
								<a class="btn btn-primary btn-xs" type="button" name="button" href="<?php echo base_url();?>index.php/admin/add_guru">Tambah data</a>
								<a class="btn btn-primary btn-xs" type="button" name="button" href="<?php echo base_url();?>index.php/pdf_guru" target="blank">Download</a>
							</div>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<table class="table">
									<thead>
										<td>No</td>
										<td>Nama</td>
										<td>Alamat</td>
										<td>Jenis Kelamin</td>
										<td>TTL</td>
										<td>NIP</td>
										<td>Email</td>
										<td>No. Telpon</td>
										<td>Aksi</td>
									</thead>
									<tbody>
										<?php
						        	$no=0;
						        	foreach ($sql1->result() as $obj1) {
						        		$no++;
						        		?>
						        			<tr>
						        				<td><?php echo $no; ?></td>
						        				<td><?php echo $obj1->nama_depan . " " . $obj1->nama_tengah . " " . $obj1->nama_belakang; ?></td>
						        				<td><?php echo $obj1->alamat."<br>".$obj1->kelurahan." ".$obj1->kecamatan." ".$obj1->kota." ".$obj1->provinsi; ?></td>
														<td><?php echo $obj1->jenis_kelamin; ?></td>
														<td><?php echo $obj1->tempat_lahir . ", " .$obj1->tanggal_lahir; ?></td>
														<td><?php echo $obj1->nip; ?></td>
														<td><?php echo $obj1->email; ?></td>
														<td><?php echo $obj1->no_telp; ?></td>
						        				<td>
						        					<a href="<?php echo base_url();?>index.php/admin/guru_edit/<?php echo $obj1->id_guru;?>"><i class="fa fa-edit" title="Ubah Data"></i></a>
						        					<a href="javascript:if(confirm('Apakah Anda yakin ingin menghapus ?')){document.location='<?php echo base_url();?>index.php/admin/guru_hapus/<?php echo $obj1->id_guru;?>';}"><i class="fa fa-times" title="Hapus Data"></i></a>
															<a href="<?php echo base_url();?>index.php/admin/guru_data_lengkap/<?php echo $obj1->id_guru;?>"><i class="fa fa-user" title="Data Lengkap"></i> </a>
						        				</td>
						        			</tr>
						        		<?php
						        	}
						        ?>
									</tbody>
								</table>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->
