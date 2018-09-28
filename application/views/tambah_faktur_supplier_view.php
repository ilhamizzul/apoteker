<center><h3 class="page-title">Tabel Data Supplier</h3></center>
<div class="col-md-12">
	<div class="panel col-md-5">
			<div class="panel-heading">
				<h3 class="panel-title">Input Barang</h3>
			</div>
			<div class="panel-body col=-md-12">
				<div class="form-group col-md-12">
                    <label>Nama Supplier</label>
                    <select class="form-control" id="supplier">
                    	<?php 
                    		foreach ($data_supplier as $data) {
                    			echo '
                    				<option value="'.$data->id_supplier.'">'.$data->nama_supplier.' - '.$data->PT_supplier.'</option>
                    			';
                    		}
                    	?>
									
					</select>
                </div>
                <div class="form-group col-md-8">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" required id="nama_barang" placeholder="Nama Barang . . ." />
                </div>
                <div class="form-group col-md-4">
                    <label>Jumlah Barang</label>
                    <input type="number" class="form-control" required id="jumlah_barang" oninput="multiply()" />
                </div>
                <div class="form-group col-md-12">
                    <label>Harga Barang</label>
                    <input type="number" class="form-control" required id="harga_barang" oninput="multiply()" />
                </div>
                <div class="form-group col-md-12">
                    <label>Harga Total Barang</label>
                    <input type="number" class="form-control" required id="harga_total" disabled />
                </div>
                <div class="form-group col-md-12">
                	<input type="submit" class="btn btn-lg btn-success col-md-6" value="Tambah Data" id="add_data">
				    <button type="button" class="btn btn-lg btn-info col-md-6">Reset</button>
                </div>
			</div>
		</div>
	<!-- TABLE HOVER -->
	<div class="panel col-md-6 col-md-offset-1">
		<div style="margin: 10px 10px 0px 0px;">
			<h3 style="text-align: center;">Tabel Data Transaksi</h3>
		</div>
		<div class="panel-body">
			<table class="table table-bordered" id="data_table">
				<thead>
					<tr>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Total Barang</th>
						<th>Total Harga</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
			<table class="table table-bordered" id="data_table2">
				<tbody>
					<tr>
						<th colspan="3">Pajak</th>
						<td id="pajak"></td>
					</tr>
					<tr>
						<th colspan="3">Total</th>
						<td id="total"></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="btn btn-md btn-success col-md-12">Submit ke Database</button>
		</div>


	</div>
	<!-- END TABLE HOVER -->
</div>