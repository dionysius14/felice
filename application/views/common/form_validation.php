<script> 
	function disable_error()
	{
		$("input").attr("style","");
		$("input").attr("title","");
	}

	function required(form_eror,id_field)
		{
			var temp=true;
			var data = document.getElementById(id_field).value;
			var  field= document.getElementById(id_field);
			var error = document.getElementById(form_eror);
				field.setAttribute("style","");
				field.setAttribute("title","");
				
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
			if(data.length<=0)
			{
				 field.setAttribute("style","border: thin solid red;");
				 field.setAttribute("title","Masukkan tidak boleh kosong");
				 error.style.display = '';
				 error.setAttribute('title','Masukkan tidak boleh kosong'); 
				 temp=false;
			} 
			return temp;
		} 
	
	function more_than(form_eror,id_field,id_field2)
	{
		var  field= document.getElementById(id_field);
		var  field2= document.getElementById(id_field2);
		var error = document.getElementById(form_eror);
		var temp=true;
		var data = Math.round(field.value);
		var data2 = Math.round(field2.value);
		//alert(data+'<'+data2);
		field.setAttribute("style","");		field.setAttribute("title",""); 
		field2.setAttribute("style","");	field2.setAttribute("title",""); 
		
		 error.style.display = 'none';
		 error.setAttribute('title','');
		 temp=true;
		
		if(data<=data2)
		{
		field2.setAttribute("style","border: thin solid red;");
		field2.setAttribute("title",'Masukkan field ini '+data2+' tidak boleh kurang dari dari atau sama dengan field sesudahnya '+data);
		field.setAttribute("style","border: thin solid red;");
		field.setAttribute("title",'Masukkan field di ini '+data2+ ' tidak boleh kurang dari dari atau sama dengan field sebelumnya '+data); 
		 error.style.display = '';
		 error.setAttribute('title','Masukkan '+data2+' tidak boleh kurang dari dari atau sama dengan '+data+'');
		 
		 temp=false;
		} 
		return temp;
	}	
	
	function less_than(form_eror,id_field,id_field2)
	{
		var  field= document.getElementById(id_field);
		var  field2= document.getElementById(id_field2);
		var error = document.getElementById(form_eror);
		var temp=true;
		var data = Math.round(document.getElementById(id_field).value);
		var data2 = Math.round(document.getElementById(id_field2).value); 
		
		field.setAttribute("style","");		field.setAttribute("title",""); 
		field2.setAttribute("style","");	field2.setAttribute("title",""); 

		//alert(data+'<'+data2);
		if(data>=data2)
		{
			 
		field2.setAttribute("style","border: thin solid red;");
		field2.setAttribute("title",'Masukkan field ini '+data+' kurang dari dari atau sama dengan field di sesudahnya '+data2);
		field.setAttribute("style","border: thin solid red;");
		field.setAttribute("title",'Masukkan field ini '+data+' tidak boleh lebih dari atau sama dengan field sebelumnya '+data2); 
			 
		 error.style.display = '';
		 error.setAttribute('title','Masukkan '+data+' tidak boleh lebih dari atau sama dengan '+data2);
		 
		 temp=false;
		}
		else
		{
			 error.style.display = 'none';
			 error.setAttribute('title','');
			 temp=true;
		}
		return temp;
	}	

	function more_than_except_zero(form_eror,id_field,id_field2)
	{	
			var  field= document.getElementById(id_field);
			var  field2= document.getElementById(id_field2);
			var error = document.getElementById(form_eror);
	
			var temp=true;
			var data = Math.round(document.getElementById(id_field).value);
			var data2 = Math.round(document.getElementById(id_field2).value);
			//alert(data+'<='+data2);
			
			field.setAttribute("style","");
			field.setAttribute("title",""); 
			field2.setAttribute("style","");
			field2.setAttribute("title",""); 
			
			if(data<=data2&&data2!=0)
			{ 	 
				field2.setAttribute("style","border: thin solid red;");
				field2.setAttribute("title",'Masukkan field ini '+data2+' tidak boleh kurang dari dari atau sama dengan field sesudahnya '+data);
				field.setAttribute("style","border: thin solid red;");
				field.setAttribute("title",'Masukkan field di ini '+data2+ ' tidak boleh kurang dari dari atau sama dengan field sebelumnya '+data); 
				 error.style.display = '';
				 error.setAttribute('title','Masukkan '+data+' tidak boleh kurang dari atau sama dengan '+data2+'');
				 
				 temp=false;
			}
			else
			{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
			}
			return temp;
		}	
		
	function less_than_except_zero(form_eror,id_field,id_field2)
	{
			var  field= document.getElementById(id_field);
			var  field2= document.getElementById(id_field2); 
			var error = document.getElementById(form_eror);
			 temp=true;
			 data=data2='0';
			 data = Math.round(document.getElementById(id_field).value);
			 data2 = Math.round(document.getElementById(id_field2).value);
				
			field.setAttribute("style","");		field.setAttribute("title",""); 
			field2.setAttribute("style","");	field2.setAttribute("title",""); 			
			//alert(data+'>='+data2);
			if(data>=data2)
			{	
				//alert(data2+'!=0');
				if(data2!=0)
				{ 
				
				field2.setAttribute("style","border: thin solid red;");
				field2.setAttribute("title",'Masukkan field ini '+data+' kurang dari dari atau sama dengan field  sesudahnya '+data2);
				field.setAttribute("style","border: thin solid red;");
				field.setAttribute("title",'Masukkan field ini '+data+' tidak boleh lebih dari atau sama dengan field sebelumnya '+data2); 
					 
				 error.style.display = '';
				 error.setAttribute('title','Masukkan '+data+' tidak boleh lebih dari atau sama dengan '+data2+'');
				 
				 temp=false;
				}
			}
			else
			{
				//alert("less_than_except_zero | else");
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
			}
			
			//alert(temp);
			return temp;
		}
	
	function min_length(form_eror,id_field,length)
	{
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
			var temp=true;
			var data = document.getElementById(id_field).value;
			if(data.length<length)
			{
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan minimal '+length+' karakter');
			 error.style.display = '';
			 error.setAttribute('title','Masukkan minimal '+length+' karakter');
			 temp=false;
			}
			else
			{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
			}
			return temp;
		}
	
	function pasti_eror(form_eror,kata_eror) //pasti eror
	{ 
			var error = document.getElementById(form_eror);
			 error.style.display = '';
			 error.setAttribute('title',kata_eror);
			 temp=false;
			
			return temp;
		}
	
	function max_length(form_eror,id_field,length)
	{
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
			var temp=true;
			var data = document.getElementById(id_field).value;
			if(data.length>=length)
			{
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan maksimal '+length+' karakter');
			 error.style.display = '';
			 error.setAttribute('title','Masukkan maksimal '+length+' karakter');
			 temp=false;
			}
			else
			{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
			}
			return temp;
		}
		
	function is_natural(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value;
		
			n = data; // force the value incase it is not
			var n1 = Math.abs(n),
			n2 = parseInt(n, 10);
		
		if(!isNaN(n1) && n2 === n1 && n1.toString() === n)
		{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
		}
		else
		{
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan harus bilangan positif');
			error.style.display = '';
			 error.setAttribute('title','Masukkan harus bilangan positif');
			 temp=false;
		}
		return temp;
	}	
	
	function is_huruf(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value;
		var re = /^[a-zA-Z]+$/;
		
		if(re.test(data))
		{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
		}
		else
		{
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan harus huruf');
			error.style.display = '';
			 error.setAttribute('title','Masukkan harus huruf');
			 temp=false;
		}
		return temp;
	}
	
	function is_time(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value; 
		 var re = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/;
		arr=data.split(":");
		if(re.test(data)&&arr[0]<24)
		{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
		}
		else
		{
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan harus valid xx:xx 24 Jam (00-23)');
			error.style.display = '';
			 error.setAttribute('title','Masukkan harus valid xx:xx 24 Jam (00-23)');
			 temp=false;
		}
		return temp;
	}		
	
	function is_time_no_zero(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value; 
		 var re = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/;
		arr=data.split(":");
		if(re.test(data)&&arr[0]<24)
		{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
		}
		else
		{
			if(data=="0")
			{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
			}
			else
			{
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan harus valid xx:xx 24 Jam (00-23)');
			 error.style.display = '';
			 error.setAttribute('title','Masukkan harus valid xx:xx 24 Jam (00-23)');
			 temp=false;
			}
		}
		return temp;
	}		
	
	function alpha_numeric(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value;
		var re = /^([a-z0-9])+$/i;
		
		if(re.test(data))
		{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
		}
		else
		{
			error.style.display = '';
			 error.setAttribute('title','Masukkan harus huruf dan angka');
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan harus huruf dan angka');
			 temp=false;
		}
		return temp;
	}	
	
	function is_numeric(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value;
		var re = /^([a-z0-9])+$/i;
		
		
		if(!isNaN(parseFloat(n)) && isFinite(n))
		{
			 error.style.display = ''; 
			 field.setAttribute('title','');
			 temp=true;
			
		}
		else
		{
			error.style.display = '';
			 error.setAttribute('title','Masukkan harus huruf dan angka');
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan harus huruf dan angka');
			 temp=false;
		}
		return temp;
	}	 
	function is_email(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value;
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
		
		if(re.test(data))
		{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
		}
		else
		{
			error.style.display = '';
			 error.setAttribute('title','Email tidak valid');
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Email tidak valid');
			 temp=false;
		}
		return temp;
	}	
		
	function is_natural_no_zero(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value;
		
			n = data; // force the value incase it is not
			var n1 = Math.abs(n),
			n2 = parseInt(n, 10);
		
		if(!isNaN(n1) && n2 === n1 && n1.toString() === n&&data!=0)
		{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
		}
		else
		{
			 error.style.display = '';
			 error.setAttribute('title','Masukkan harus bilangan bulat dan lebih dari 0');
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan harus bilangan bulat dan lebih dari 0');
			 temp=false;
		}
		return temp;
	}	
	function is_decimal_no_zero(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value;
		
			n = data; // force the value incase it is not
			var n1 = Math.abs(n),
			n2 = parseInt(n, 10);
		//alert(!isNaN(parseFloat(n)) && isFinite(n));
		if(!isNaN(parseFloat(n)) && isFinite(n)&&n!=0)
		{  
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
		}
		else
		{ 
			 error.style.display = '';
			 error.setAttribute('title','Masukkan harus lebih dari 0 dan jika pecahan gunakan . sebagai pemisah');
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan harus lebih dari 0 dan jika pecahan gunakan . sebagai pemisah');
			 temp=false;
		}
		return temp;
	}	
	
	function alpha_dash(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value;
		var re = /^([-a-z0-9_-])+$/i;
		
		if(re.test(data))
		{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
		}
		else
		{
			error.style.display = '';
			 error.setAttribute('title','Masukkan hanya untuk huruf, angka dan -');
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan hanya untuk huruf, angka dan -');
			 temp=false;
		}
		return temp;
	}	
	
	function is_integer(form_eror,id_field) {
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		var data = document.getElementById(id_field).value;
		var re = /^[\-+]?[0-9]+$/;
		
		if(re.test(data))
		{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
		}
		else
		{
			error.style.display = '';
			 error.setAttribute('title','Masukkan hanya untuk bilangan/angka');
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan hanya untuk bilangan/angka');
			 temp=false;
		}
		return temp;
	}	
				
	function is_uniq(form_eror,id_field,array,tabel_nama,table_delete)
	{ 
			var  field= document.getElementById(id_field);
			field.setAttribute("style","");		field.setAttribute("title",""); 
			var error = document.getElementById(form_eror);
		temp=true;
		var data = document.getElementById(id_field).value;
		//alert("sini"+array.length);
		for(var k=0;k<array.length;k++)
		{
			
			//alert("perulangan ["+k+"] ="+array[k][tabel_nama].toUpperCase()+'=='+data.toUpperCase()+'&&'+array[k][table_delete]+'==0');
			
			if(array[k][tabel_nama].toUpperCase()==data.toUpperCase()&&array[k][table_delete]=="0")
			{
				//alert("sama");
				 error.style.display = '';
				 error.setAttribute('title','Masukkan sudah ada');
			 field.setAttribute("style","border: thin solid red;");
			 field.setAttribute('title','Masukkan sudah ada');
				 return false;
			}
			else{
				 error.style.display = 'none';
				 error.setAttribute('title','');
				 temp=true;
			}
			
			//alert(array[k][tabel_nama]+"=="+data);
		}
		
		return temp;
				
	}
		
	function is_uniq_edit(form_eror,id_field,array,tabel_nama,tabel_id,primary_key,$table_delete)
	{
		var  field= document.getElementById(id_field);
		field.setAttribute("style","");		field.setAttribute("title",""); 
		var error = document.getElementById(form_eror);
		temp=true;
		var data = document.getElementById(id_field).value;
		for(var k=0;k<array.length;k++)
		{
			
			if(array[k][tabel_nama].toUpperCase()==data.toUpperCase()&&array[k][tabel_id]==primary_key)
			{
				return true
			}
		}
		if(temp==true)
		{	
			//alert(is_uniq(form_eror,id_field,array,tabel_nama,$table_delete));
			 return is_uniq(form_eror,id_field,array,tabel_nama,$table_delete);
		}
	}
		
	function form_validation(checking,form_eror,id_field)
	{
		var temp=true;
		for(var i=0;i<checking.length;i++)
		{
			
			if(temp)
			{
				//alert("checking["+i+"] => "+checking[i]);
				if(checking[i]=="required")
				{
					temp=Boolean(required(form_eror,id_field));
				}
				else if(checking[i].indexOf('min_length')!==-1)
				{
					arr=checking[i].split("~");
					temp=Boolean(min_length(form_eror,id_field,arr[1]));
				}
				else if(checking[i].indexOf('max_length')!==-1)
				{
					arr=checking[i].split("~");
					temp=Boolean(max_length(form_eror,id_field,arr[1]));
				}
				else if(checking[i]=="is_numeric")
				{
					temp=Boolean(is_numeric(form_eror,id_field));
				}
				else if(checking[i]=="is_natural_no_zero")
				{
					temp=Boolean(is_natural_no_zero(form_eror,id_field));
				}
				else if(checking[i]=="is_decimal_no_zero")
				{
					temp=Boolean(is_decimal_no_zero(form_eror,id_field));
				}
				else if(checking[i]=="is_natural")
				{
					temp=Boolean(is_natural(form_eror,id_field));
				}
				else if(checking[i]=="is_huruf")
				{
					temp=Boolean(is_huruf(form_eror,id_field));
				}
				else if(checking[i]=="alpha_numeric")
				{
					temp=Boolean(alpha_numeric(form_eror,id_field));
				}
				else if(checking[i]=="is_email")
				{
					temp=Boolean(is_email(form_eror,id_field));
				}
				else if(checking[i]=="is_integer")
				{
					temp=Boolean(is_integer(form_eror,id_field));
				}
				else if(checking[i]=="is_time")
				{
					temp=Boolean(is_time(form_eror,id_field));
				}
				
				else if(checking[i].indexOf('more_than_except_zero')!==-1)
				{
					//alert("checking["+i+"]=>"+checking[i]+" | "+checking.length+" | "+"more_than_except_zero");		
					arr=checking[i].split("~");
					temp=Boolean(more_than_except_zero(form_eror,id_field,arr[1]));
				}
				else if(checking[i].indexOf('less_than_except_zero')!==-1)
				{
					//alert("checking["+i+"]=>"+checking[i]+" | "+checking.length+" | "+"less_than_except_zero");		
					arr=checking[i].split("~");
					temp=Boolean(less_than_except_zero(form_eror,id_field,arr[1]));
				}
				else if(checking[i].indexOf('more_than')!==-1)
				{
					//alert("checking["+i+"]=>"+checking[i]+" | "+checking.length+" | "+"more_than");		
					arr=checking[i].split("~");
					temp=Boolean(more_than(form_eror,id_field,arr[1]));
				}
				else if(checking[i].indexOf('less_than')!==-1)
				{
					//alert("checking["+i+"]=>"+checking[i]+" | "+checking.length+" | "+"less_than");		
					arr=checking[i].split("~");
					temp=Boolean(less_than(form_eror,id_field,arr[1]));
				}
				//alert("temp="+temp);
			}
			else if(temp=="false")
			{
				i=checking.length;
			}	
		}
		return temp;
	}
		
</script>



