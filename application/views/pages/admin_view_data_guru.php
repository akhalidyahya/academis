<div class="page-content">
	<div class="page-header">
		<h1>
			Data Guru
		</h1>
	</div><!-- /.page-header -->
	<div class="row">
		<div class="col-xs-12">
			<div class="clearfix">
				<a class="btn btn-primary btn-xs" type="button" name="button" href="<?php echo base_url();?>index.php/admin/add_guru">Tambah data</a>
				<a class="btn btn-primary btn-xs" type="button" name="button" href="<?php echo base_url();?>index.php/pdf_guru" target="blank">Download</a>
				<div class="pull-right tableTools-container"></div>
			</div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace" />
								<span class="lbl"> No</span>
							</label>
						</th>
						<th>Nama Lengkap</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>TTL</th>
						<th>NIP</th>
						<th>No. Telpon</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=0;
					foreach ($sql1 as $obj1) {
						$no++;
						?>
						<tr>
							<td class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace" />
									<span class="lbl"> <?php echo $no; ?></span>
								</label>
							</td>
							<td><?php echo $obj1->nama_depan . " " . $obj1->nama_tengah . " " . $obj1->nama_belakang; ?></td>
							<td><?php echo $obj1->alamat."<br>".$obj1->kelurahan." ".$obj1->kecamatan." ".$obj1->kota." ".$obj1->provinsi; ?></td>
							<td><?php echo $obj1->jenis_kelamin; ?></td>
							<td><?php echo $obj1->tempat_lahir . ", " .$obj1->tanggal_lahir; ?></td>
							<td><?php echo $obj1->nip; ?></td>
							<td><?php echo $obj1->no_telp; ?></td>
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
									<a class="blue" href="<?php echo base_url();?>index.php/admin/guru_data_lengkap/<?php echo $obj1->id_guru;?>">
										<i class="ace-icon fa fa-search-plus bigger-130" title="Detail Profil"></i>
									</a>
									<a class="green" href="<?php echo base_url();?>index.php/admin/guru_edit/<?php echo $obj1->id_guru;?>">
										<i class="ace-icon fa fa-pencil bigger-130" title="Edit"></i>
									</a>
									<a class="red" href="javascript:if(confirm('Apakah Anda yakin ingin menghapus ?')){document.location='<?php echo base_url();?>index.php/admin/guru_hapus/<?php echo $obj1->id_guru;?>';}">
										<i class="ace-icon fa fa-trash-o bigger-130" title="Delete"></i>
									</a>
								</div>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

	<!-- Import jQuery-->
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/moment.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/buttons.flash.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/buttons.html5.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/buttons.print.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/buttons.colVis.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables.select.min.js"></script>
	<script>
	jQuery(function($) {
		//initiate dataTables plugin
		var myTable =
		$('#dynamic-table')
		//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
		.DataTable( {
			bAutoWidth: false,
			"aoColumns": [
				{ "bSortable": false },
				null, null,null, null, null, null,
				{ "bSortable": false }
			],
			"aaSorting": [],


			//"bProcessing": true,
			//"bServerSide": true,
			//"sAjaxSource": "http://127.0.0.1/table.php"	,

			//,
			//"sScrollY": "200px",
			//"bPaginate": false,

			//"sScrollX": "100%",
			//"sScrollXInner": "120%",
			//"bScrollCollapse": true,
			//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
			//you may want to wrap the table inside a "div.dataTables_borderWrap" element

			//"iDisplayLength": 50


			select: {
				style: 'multi'
			}
		} );



		$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

		new $.fn.dataTable.Buttons( myTable, {
			buttons: [
				{
					"extend": "colvis",
					"text": "<i class='fa fa-search bigger-110 blue' title='Show/hide columns'></i> <span class='hidden'>Show/hide columns</span>",
					"className": "btn btn-white btn-primary btn-bold",
					columns: ':not(:first):not(:last)'
				},
				{
					"extend": "copy",
					"text": "<i class='fa fa-copy bigger-110 pink' title='Copy to clipboard'></i> <span class='hidden'>Copy to clipboard</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "csv",
					"text": "<i class='fa fa-database bigger-110 orange' title='Export to CSV'></i> <span class='hidden'>Export to CSV</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "excel",
					"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "pdf",
					"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "print",
					"text": "<i class='fa fa-print bigger-110 grey' title='Print'></i> <span class='hidden'>Print</span>",
					"className": "btn btn-white btn-primary btn-bold",
					autoPrint: false,
				}
			]
		} );
		myTable.buttons().container().appendTo( $('.tableTools-container') );

		//style the message box
		var defaultCopyAction = myTable.button(1).action();
		myTable.button(1).action(function (e, dt, button, config) {
			defaultCopyAction(e, dt, button, config);
			$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
		});

		var defaultColvisAction = myTable.button(0).action();
		myTable.button(0).action(function (e, dt, button, config) {

			defaultColvisAction(e, dt, button, config);

			if($('.dt-button-collection > .dropdown-menu').length == 0) {
				$('.dt-button-collection')
				.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
				.find('a').attr('href', '#').wrap("<li />")
			}
			$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
		});

		////

		setTimeout(function() {
			$($('.tableTools-container')).find('a.dt-button').each(function() {
				var div = $(this).find(' > div').first();
				if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
				else $(this).tooltip({container: 'body', title: $(this).text()});
			});
		}, 500);

		myTable.on( 'select', function ( e, dt, type, index ) {
			if ( type === 'row' ) {
				$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
			}
		} );
		myTable.on( 'deselect', function ( e, dt, type, index ) {
			if ( type === 'row' ) {
				$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
			}
		} );

		/////////////////////////////////
		//table checkboxes
		$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

		//select/deselect all rows according to table header checkbox
		$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header

			$('#dynamic-table').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) myTable.row(row).select();
				else  myTable.row(row).deselect();
			});
		});

		//select/deselect a row when the checkbox is checked/unchecked
		$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
			var row = $(this).closest('tr').get(0);
			if(this.checked) myTable.row(row).deselect();
			else myTable.row(row).select();
		});

		$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
		});

		/********************************/
		//add tooltip for small view action buttons in dropdown menu
		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

		//tooltip placement on right or left
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();

			var off2 = $source.offset();
			//var w2 = $source.width();

			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}

		/***************/
		$('.show-details-btn').on('click', function(e) {
			e.preventDefault();
			$(this).closest('tr').next().toggleClass('open');
			$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
		});
})
</script>
