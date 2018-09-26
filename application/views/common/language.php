<script> 
	function form_error_keterangan(error,form,form_error)		
	{ 
		 error=result.split("~");
		 keterangan=error[2];
		 error=error[0];
		// keterangan = typeof keterangan !== 'undefined' ? keterangan : "";
		$("#"+form_error).html( )
		if(error=="required") return "Maaf "+form+" tidak boleh kosong";
		else if(error=="more_than_except_zero") return "Maaf masukkan "+form+" terlalu kecil daripada "+keterangan;
		else if(error=="less_than_except_zero") return "Maaf masukkan "+form+" terlalu besar daripada "+keterangan;
		else if(error=="more_than") return "Maaf masukkan "+form+" terlalu kecil daripada "+keterangan;
		else if(error=="less_than") return "Maaf masukkan "+form+" terlalu besar daripada "+keterangan;
		else if(error=="min_length") return "Maaf masukkan "+form+" minimal "+keterangan+" kata";
		else if(error=="max_length") return "Maaf masukkan "+form+" maksimal "+keterangan+" kata";
		else if(error=="is_natural_no_zero") return "Maaf masukkan "+form+" harus lebih dari 0";
		else if(error=="is_natural") return "Maaf masukkan "+form+" harus bilangan positif";
		else if(error=="is_numerik") return "Maaf masukkan "+form+" harus bilangan";
		else if(error=="is_huruf") return "Maaf masukkan "+form+" harus huruf a-Z";
		else if(error=="is_time") return "Maaf masukkan "+form+" harus xx:xx";
		else if(error=="is_email") return "Maaf masukkan "+form+" harus valid";
		else if(error=="is_unique_custom") return "Maaf masukkan "+form+" sudah pernah ada";
		else if(error=="is_unique_edit_custom") return "Maaf masukkan "+form+" sudah pernah ada";
	}
	function form_error(error,form,form_error)		
	{  
		$("#"+form_error).html(form_error_keterangan(error,form,form_error)); 
	}
</script>



