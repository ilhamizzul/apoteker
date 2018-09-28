<script type="text/javascript">
	function delete_supplier(id_supplier) {
		$('.supplier').empty();

		$.getJSON('<?php echo base_url() ?>supplier/get_supplier_by_id/' + id_supplier, function(json) {
			$('.supplier').text(json.nama_supplier);
			$('#delete_supplier').attr('href', '<?php echo base_url() ?>supplier/delete/' + json.id_supplier);
		});
	}

	function edit_supplier(id_supplier) {
		$('#nama_supplier').empty();
		$('#PT_supplier').empty();

		/*optional stuff to do after success */
		$.getJSON('<?php echo base_url() ?>supplier/get_supplier_by_id/' + id_supplier, function(json) {
			$('#nama_supplier').attr('value', json.nama_supplier);
			$('#PT_supplier').attr('value', json.PT_supplier);
			$('#edit_supplier').attr('action', '<?php echo base_url() ?>supplier/edit/' + id_supplier);
		});
	}
</script>