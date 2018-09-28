<script type="text/javascript">
	function multiply() {
			var jumlah_barang = $('#jumlah_barang').val();
			var harga_barang = $('#harga_barang').val();
			var total = jumlah_barang * harga_barang;
			var harga_total = $('#harga_total').val(total);
		}
	$(function(){

		

		$('#add_data').click(function() {
			var supplier = $('#supplier').val();
			var nama_barang = $('#nama_barang').val();
			var jumlah_barang = $('#jumlah_barang').val();
			var harga_barang = $('#harga_barang').val();
			var harga_total = $('#harga_total').val();

			var jumlah = parseInt(jumlah) + parseInt(harga_total);
			var pajak = 10/100 * jumlah;

			$('#data_table tbody:last-child').append(
					'<tr>'+
						'<td hidden>'+supplier+'</td>'+
						'<td>'+nama_barang+'</td>'+
						'<td>'+harga_barang+'</td>'+
						'<td>'+jumlah_barang+'</td>'+
						'<td>'+harga_total+'</td>'+
					'</tr>' 
			);

			if (supplier != null) {
				$('#supplier').prop({'disabled': true});
			}

			$('#nama_barang').val('');
			$('#jumlah_barang').val('');
			$('#harga_barang').val('');
			$('#harga_total').val('');

			$('#pajak').text(pajak);
			$('#total').text(jumlah + pajak);
		});

	});

</script>