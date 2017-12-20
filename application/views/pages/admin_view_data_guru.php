<div class="page-content">
						<div class="page-header">
							<h1>
								Data Guru
							</h1>
							<div style="margin:15px 0px 0px 0px;">
								<button class="btn btn-primary btn-xs" type="button" name="button">Tambah data</button>
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
										<td>Kelurahan</td>
										<td>Kecamatan</td>
										<td>Provinsi</td>
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
						        				<td><?php echo $obj1->nama_depan; ?></td>
						        				<td><?php echo $obj1->alamat; ?></td>
														<td><?php echo $obj1->kelurahan; ?></td>
														<td><?php echo $obj1->kecamatan; ?></td>
														<td><?php echo $obj1->provinsi; ?></td>
														<td><?php echo $obj1->jenis_kelamin; ?></td>
														<td><?php echo $obj1->tanggal_lahir; ?></td>
														<td><?php echo $obj1->nip; ?></td>
														<td><?php echo $obj1->email; ?></td>
														<td><?php echo $obj1->no_telp; ?></td>
						        				<td>
						        					<a href="<?php echo base_url();?>#<?php echo $obj1->id_guru;?>" class="btn btn-info btn-xs"> Edit</a>
						        					<a href="javascript:if(confirm('Apakah Anda yakin ingin menghapus ?')){document.location='<?php echo base_url();?>#<?php echo $obj1->id_guru;?>';}" class="btn btn-danger btn-xs"> Hapus </a>
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
