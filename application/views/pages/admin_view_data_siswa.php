<div class="page-content">
						<div class="page-header">
							<h1>
								Data siswa
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
								<a class="btn btn-primary btn-xs" type="button" name="button" href="<?php echo base_url();?>index.php/admin/add_siswa">Tambah data</a>
								<a class="btn btn-primary btn-xs" type="button" name="button" href="<?php echo base_url();?>index.php/pdf_siswa" target="blank">Download</a>
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
										<td>NIS</td>
										<td>NISN</td>
                                        <td>Agama</td>
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
														<td><?php echo $obj1->nis; ?></td>
                                                        <td><?php echo $obj1->nisn; ?></td>
														<td><?php echo $obj1->agama; ?></td>
						        				<td>    
						        					<a href="<?php echo base_url();?>index.php/admin/siswa_edit/<?php echo $obj1->id_siswa;?>" class="fa fa-edit"></a>
						        					<a href="javascript:if(confirm('Apakah Anda yakin ingin menghapus ?')){document.location='<?php echo base_url();?>index.php/admin/siswa_hapus/<?php echo $obj1->id_siswa;?>';}" class="fa fa-times"></a>
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
