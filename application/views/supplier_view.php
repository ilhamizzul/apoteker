<center><h3 class="page-title">Tabel Data Supplier</h3></center>
<div class="col-md-12">
<!-- TABLE HOVER -->
	<div class="panel">
		<div style="margin: 10px 10px 0px 0px;">
			<button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-success btn-md pull-right" style="margin-bottom: 10px;"><span class="fa fa-plus"></span> Tambah</button>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>PT. Supplier</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						foreach ($data_supplier as $data) {
							echo '
								<tr>
									<td>'.$no++.'</td>
									<td>'.$data->nama_supplier.'</td>
									<td>'.$data->PT_supplier.'</td>
									<td>
										<button type="button" data-toggle="modal" data-target="#hapus" onclick="delete_supplier('.$data->id_supplier.')" class="btn btn-md btn-danger"><span class="fa fa-trash"></span> Hapus</button>
										<button type="button" data-toggle="modal" data-target="#edit" onclick="edit_supplier('.$data->id_supplier.')" class="btn btn-md btn-warning"><span class="fa fa-pencil"></span> Edit</button>
									</td>
								</tr>
							';
						}
					?>
								
				</tbody>
			</table>
		</div>

		<!-- MODAL TAMBAH -->
		<div class="modal fade" id="tambah" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
			    <div class="modal-content col-md-12">
			        <div class="modal-header">
			            <h4 class="modal-title" id="defaultModalLabel">Tambah Supplier</h4>
			        </div>
			        <div class="modal-body col-md-12">
			           	<form method="post" action="<?php echo base_url() ?>supplier/insert" enctype="multipart/form-data">
			                <div class="form-group col-md-12">
			                    <label>Nama Supplier</label>
			                    <input type="text" class="form-control" required name="nama_supplier" placeholder="Nama Supplier . . ." />
			                </div>
			                <div class="form-group col-md-12">
			                    <label>PT Supplier</label>
			                    <input type="text" class="form-control" required name="PT_supplier" placeholder="PT Supplier . . ." />
			                </div>
			                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
			                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>
			           </form>
			        </div>
			    </div>
			</div>
		</div>

		<!-- MODAL HAPUS -->
		<div class="modal fade" id="hapus" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
			    <div class="modal-content col-md-12">
			        <div class="modal-header">
			            <h4 class="modal-title" id="defaultModalLabel">Hapus Supplier <b class='supplier'></b></h4>
			        </div>
			        <div class="modal-body">
			           	Apakah Anda yakin ingin menghapus data supplier atas nama <b class="supplier"></b>? (Semua data yang berkaitan dengan data supplier ini akan dihapus juga)
			        </div>
			        <div class="modal-footer">
			        	<a href="" id="delete_supplier" class="btn btn-danger">Hapus</a>
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			        </div>
			    </div>
			</div>
		</div>

		<!-- MDAL EDIT -->
		<div class="modal fade" id="edit" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
			    <div class="modal-content col-md-12">
			        <div class="modal-header">
			            <h4 class="modal-title" id="defaultModalLabel">Edit Supplier</h4>
			        </div>
			        <div class="modal-body col-md-12">
			           	<form method="post" id="edit_supplier" action="" enctype="multipart/form-data">
			                <div class="form-group col-md-12">
			                    <label>Nama Supplier</label>
			                    <input type="text" class="form-control" required value="" id="nama_supplier" name="nama_supplier" placeholder="Nama Supplier . . ." />
			                </div>
			                <div class="form-group col-md-12">
			                    <label>PT Supplier</label>
			                    <input type="text" class="form-control" required value="" id="PT_supplier" name="PT_supplier" placeholder="PT Supplier . . ." />
			                </div>
			                <input type="submit" class="btn btn-success col-md-6" value="Submit" name="">
			                <button type="button" class="btn btn-info col-md-6" data-dismiss="modal">Tutup</button>
			           </form>
			        </div>
			    </div>
			</div>
		</div>
	</div>
<!-- END TABLE HOVER -->
</div>