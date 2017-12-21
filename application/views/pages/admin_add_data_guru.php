<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" />
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
<div class="page-content">
						<div class="page-header">
							<h1>
								Add Data Guru
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal">
									<!-- Nama -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Lengkap </label>
										<div class="col-sm-3">
											<input type="text" id="form-field-1" placeholder="Nama Depan" class="col-xs-12" />
										</div>
										<div class="col-sm-3">
											<input type="text" id="form-field-1" placeholder="Nama Tengah" class="col-xs-12" />
										</div>
										<div class="col-sm-3">
											<input type="text" id="form-field-1" placeholder="Nama Belakang" class="col-xs-12" />
										</div>
									</div>

									<!-- Alamat -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>
										<div class="col-sm-6">
											<textarea class="form-control" id="form-field-8" placeholder="Alamat"></textarea>
										</div>
									</div>

									<!-- Kelurahan / Kecamatan-->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kelurahan / Kecamatan </label>
										<div class="col-sm-3">
											<input type="text" id="form-field-1" placeholder="Kelurahan" class="col-xs-12" />
										</div>
										<div class="col-sm-3">
											<input type="text" id="form-field-1" placeholder="Kecamatan" class="col-xs-12" />
										</div>
									</div>

									<!-- Propinsi-->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Propinsi </label>
										<div class="col-sm-3">
											<select class="form-control" id="form-field-select-1">
												<option value=""></option>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
											</select>
										</div>
									</div>

									<!-- Jenis Kelamin -->
									<div class="form-group control-group">
										<label class=" col-sm-3 control-label no-padding-right">Jenis Kelamin</label>

										<div class="radio">
											<label>
												<input name="form-field-radio" type="radio" class="ace" />
												<span class="lbl"> Laki-laki</span>
											</label>

											<label>
												<input name="form-field-radio" type="radio" class="ace" />
												<span class="lbl"> Perempuan</span>
											</label>
										</div>
									</div>

									<!-- TTL -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat, tanggal lahir </label>
										<div class="col-sm-3">
											<input type="text" id="form-field-1" placeholder="Tempat" class="col-xs-12" />
										</div>
										<div class="col-sm-3">
											<div class="input-group">
												<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
												<span class="input-group-addon">
													<i class="fa fa-calendar bigger-110"></i>
												</span>
											</div>
										</div>
									</div>

									<!-- NIP -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIP </label>
										<div class="col-sm-3">
											<input type="text" id="form-field-1" placeholder="NIP" class="col-xs-12" />
										</div>
									</div>

									<!-- Email -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
										<div class="col-sm-3">
											<input type="text" id="form-field-1" placeholder="Email" class="col-xs-12" />
										</div>
									</div>

									<!-- No. Telpon -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No. Telpon </label>
										<div class="col-sm-3">
											<input type="text" id="form-field-1" placeholder="No. Telpon" class="col-xs-12" />
										</div>
									</div>

									<!-- Submit -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"></label>
										<div class="col-sm-3">
											<button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
										</div>
									</div>
								</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->
		<script type="text/javascript">
		//datepicker plugin
		//link
		$('.date-picker').datepicker({
			autoclose: true,
			todayHighlight: true
		})
		//show datepicker when clicking on the icon
		.next().on(ace.click_event, function(){
			$(this).prev().focus();
		});
		</script>
