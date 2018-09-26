<?php 
if($this->session->userdata('user_id')==""){
 redirect('login');
}
$table='setting_akses_menu';
$join="";
$where = "where role_id='" . $this->session->userdata('role_id')."'";
$order_by='';
$group_by='';
$aksesa = $this->script_sql->get_data_row($table,$join,$where,$order_by,$group_by); 
$aksses='0';
$akses_insert='0';
$akses_edit='0';
$akses_delete='0';
if(isset($akses))
{
	if($aksesa->result()!=null)
	{
		if ($aksesa->num_rows() > 0)
		{ 
		  foreach ($aksesa->result_array() as $row)
			{
				$aksses=$row[$akses];
				$dt_user_aksis=explode('~',$row[$akses.'_aksi']);
				$akses_insert = $dt_user_aksis[0];
				$akses_edit = $dt_user_aksis[1];
				$akses_delete = $dt_user_aksis[2];	
			}
		}
	}
}	
$this->session->set_userdata('akses',$aksses);
$this->session->set_userdata('akses_insert',$akses_insert);
$this->session->set_userdata('akses_edit',$akses_edit);
$this->session->set_userdata('akses_delete',$akses_delete);  
?> 
<div id="dialogoverlay"></div>
<div id="dialogbox">
    <div>
        <div id="dialogboxhead"></div>
        <div id="dialogboxbody"></div>
        <div id="dialogboxfoot"></div>
    </div>
</div>
<script>
    confirm = alertify.confirm; 
					// $("#tab_form").trigger('click'); //pindah tab form
    $(document).ready(function() {
        $("button").click(function() {
			if(!this.hasAttribute("no_loading"))
			{
				$(".loading_gear_gif").show();
			}
        });
        $("input[type=submit]").click(function() {
			if(!this.hasAttribute("no_loading"))
			{
				$(".loading_gear_gif").show();				
			} 
        });
        $(".menu").click(function() {
           $(".loading_gif").show();
        });
    });
	
	
    $(document).ready(function() {
        $(".tgl_cari").datepicker({
//            showOn: 'both',
//            buttonImage: '<?php echo base_url(); ?>include/img/calendar.gif',
//            buttonImageOnly: true,
//            buttonText: 'set tanggal',
            dayNames: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
            dayNamesMin: ['Mi', 'Sn', 'Sl', 'Rb', 'Km', 'Jm', 'Sb'],
            dayNamesShort: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
            monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            changeMonth: true,
            changeYear: true,
            dateFormat: 'd M yy',
            yearRange: 'c-3:c+1',
        });
    });
	
	function format_date(dates,format)
	{ 
		mydate = new Date(dates);
		
		return str = mydate.toString(format);
	}
	
	function today()
	{
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!

		var yyyy = today.getFullYear();
		if(dd<10){
			dd='0'+dd
		} 
		if(mm<10){
			mm='0'+mm
		} 
		return today = format_date(yyyy+"/"+mm+"/"+dd,'dd MMM yyyy');
	
	}
	
	function format_date(dates,format)
	{
		mydate = new Date(dates);
		return str = mydate.toString(format);
	}
	
	
	function enlarge ( x )
	{
		popUpObj=window.open(x, 'enlarge', 'screenX=0,screenY=0,left=200,top=100,menubar=no,status=no,scrollbars=yes,toolbar=no,resizable=yes,width=1024,height=400');
		//popUpObj.focus();
	}
	
	
	function popup ( x )
	{  
		popUpObj=window.open(x, 'enlarge', 'screenX=0,screenY=0,left=200,top=100,menubar=no,status=no,scrollbars=yes,toolbar=no,resizable=yes,width=1024,height=400');
		// popUpObj.focus();
	}
	
	function popup_full ( x )
	{
		width=screen.availWidth; 
		height=screen.availHeight ; 
		popUpObj=window.open(x, 'enlarge', 'screenX=0,screenY=0,left=200,top=100,menubar=no,status=no,scrollbars=yes,toolbar=no,resizable=yes,width='+width+',height='+height+'');
		//popUpObj.focus();
	}
	
	
	function newTab(address, window_name)
    {
        window.open(address, window_name);
    }
	function refreshParent()
	{
		 if(window.opener != null && !window.opener.closed)  
		 {
			window.opener.location.reload();

		 }
	}
	

    $(document).ready(function() {
        $(".tgl_cari").datepicker({
//            showOn: 'both',
//            buttonImage: '<?php echo base_url(); ?>include/img/calendar.gif',
//            buttonImageOnly: true,
//            buttonText: 'set tanggal',
            dayNames: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
            dayNamesMin: ['Mi', 'Sn', 'Sl', 'Rb', 'Km', 'Jm', 'Sb'],
            dayNamesShort: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
            monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            changeMonth: true,
            changeYear: true,
            dateFormat: 'd M yy',
            yearRange: 'c-3:c+1',
        });
    });

    $(document).ready(function() {
        $(".tanggal").datepicker({
         /*   showOn: 'both',
           buttonImage: '<?php echo base_url(); ?>include/img/calendar.gif',
           buttonImageOnly: true,
           buttonText: 'set tanggal', */
            dayNames: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
            dayNamesMin: ['Mi', 'Sn', 'Sl', 'Rb', 'Km', 'Jm', 'Sb'],
            dayNamesShort: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
            monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            changeMonth: true,
            changeYear: true,
            dateFormat: 'd M yy',
            yearRange: 'c-3:c+1',
        });
    });

    function hide_remodal()
    {
        // $(".pop").fadeOut(300);

        var overlay = document.getElementById('overlay');

        var form_popup = document.getElementById('form_popup');
        overlay.style.opacity = .8;
        overlay.style.display = "none";
        form_popup.style.display = "none";
    }

    function show_remodal()
    {
        var overlay = document.getElementById('overlay');
        var form_popup = document.getElementById('form_popup');
        overlay.style.opacity = .8;

        overlay.style.display = "block";
        form_popup.style.display = "block";
        // $(".pop").fadeIn(300);

        setTimeout(function()
        { 
            $(".loading_gear_gif").hide();
        }, 800);
    }

    function hide_remodal_custom(overlay,popup)
    { 
        var overlay = document.getElementById(overlay);

        var form_popup = document.getElementById(popup);
        overlay.style.opacity = .8;
        overlay.style.display = "none";
        form_popup.style.display = "none";
    }

    function show_remodal_custom(overlay,popup)
    {
        var overlay = document.getElementById(overlay);
        var form_popup = document.getElementById(popup);
        overlay.style.opacity = .8;

        overlay.style.display = "block";
        form_popup.style.display = "block";
        // $(".pop").fadeIn(300);

        setTimeout(function()
        { 
            $(".loading_gear_gif").hide();
        }, 800);
    }


	function format_date(dates,format)
	{
		mydate = new Date(dates);
		return str = mydate.toString(format);
	}
	
	function currency_format(jumlah)
	{
		var x = +jumlah + +0;
		return n = x.toFixed().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
	}
	
	function reset(id,values)
	{ 
		input=document.getElementById(id);
		tipe=$("#"+id).prop("tagName")
		// alert(tipe);
		if(tipe=="SELECT") 
		{
			values = typeof values !== 'undefined' ? values : "0";
			$("#"+id).prop("selectedIndex",values); 
		}
		else if(tipe=="INPUT")
		{
			values = typeof values !== 'undefined' ? values : "";
			document.getElementById(id).value=values;
		}
		else
		{
			values = typeof values !== 'undefined' ? values : "";
			document.getElementById(id).innerHTML=values;
		}
		
	}
	
	 
	  function cek_http(ready,status,text)
	  {
		if (ready==4)
		{
			if(status!=200)
			alertify.error(status+" - "+text);
			
		}
	}
	
	jQuery(window).load(function () {
		// alert("joi");
		$(".loading_gif").hide();
		$(".loading_gear_gif").hide();
	});
</script>

<div class="loading_gif" style=" display: none;"> 
    <img src="<?php echo base_url(); ?>include/img/loading.gif"/>
    <br/>
    <span>Mengambil data <img width="2%" src="<?php echo base_url(); ?>include/img/loading_dot.gif"/></span>
</div>

<div class="loading_gear_gif" style=" display: none;"> 
    <img src="<?php echo base_url(); ?>include/img/loading_gear.gif"/>
    <br/>
    <span>Menyiapkan <?php echo $this->session->userdata('subtitle') ?> <img width="2%" src="<?php echo base_url(); ?>include/img/loading_dot.gif"/></span>
</div>