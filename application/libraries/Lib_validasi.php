<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class lib_validasi {

    var $CI;  
		
	function form_validation($form,$checking)
	{
		$temp=true;
		$checking=explode("|",$checking);
		for($i=0;$i<count($checking);$i++)
		{
			if($temp)
			{
				$array=explode(".",$checking[$i]);
				if($checking[$i]=="required")
				{
					$temp=($this->required($form)); 
					$temp = $temp === ''? false: true;
					$temp.="~required~";
				}
				else if($checking[$i]=="more_than_except_zero")
				{
					$temp=($this->more_than_except_zero($form,$array[1]));
					$temp = $temp === '1'? true: false;
					$temp.="~more_than_except_zero~".$array[1];
				}
				else if($checking[$i]=="less_than_except_zero")
				{
					$temp=($this->less_than_except_zero($form,$array[1])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~less_than_except_zero~".$array[1];
				}
				else if($checking[$i]=="more_than")
				{
					$temp=($this->more_than($form,$array[1]));
					$temp = $temp === '1'? true: false;
					$temp.="~more_than~".$array[1];
				}
				else if($checking[$i]=="less_than")
				{
					$temp=($this->less_than($form,$array[1])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~less_than~".$array[1];
				}
				else if($checking[$i]=="min_length")
				{
					$temp=($this->min_length($form,$array[1])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~min_length~".$array[1];
				}
				else if($checking[$i]=="max_length")
				{
					$temp=($this->max_length($form,$array[1])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~max_length~".$array[1];
				}
				else if($checking[$i]=="is_natural_no_zero")
				{
					$temp=($this->is_natural_no_zero($form,$array[1]));
					$temp = $temp === '1'? true: false;
					$temp.="~is_natural_no_zero~".$array[1];
				}
				else if($checking[$i]=="is_natural")
				{
					$temp=($this->is_natural($form,$array[1])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~is_natural~".$array[1];
				}
				else if($checking[$i]=="is_numerik")
				{
					$temp=($this->is_numerik($form,$array[1])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~is_numerik~".$array[1];
				}
				else if($checking[$i]=="is_huruf")
				{
					$temp=($this->is_huruf($form,$array[1])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~is_huruf~".$array[1];
				} 
				else if($checking[$i]=="is_time")
				{
					$temp=($this->is_time($form,$array[1])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~is_time~".$array[1];
				}
				else if($checking[$i]=="is_email")
				{
					$temp=($this->is_email($form,$array[1])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~is_email~".$array[1];
				}
				else if($checking[$i]=="is_unique_custom")
				{
					$temp=($this->is_unique_custom($form,$checking[$i])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~is_unique_custom~".$array[1];
				}
				else if($checking[$i]=="is_unique_edit_custom")
				{
					$temp=($this->is_unique_edit_custom($form,$checking[$i])) ;
					$temp = $temp === '1'? true: false;
					$temp.="~is_unique_edit_custom~".$array[1];
				}
			} 
		} 
		return $temp;
	}
	
	function required($data)
	{ 
		if($data!="")
		return TRUE ;
		else
		return FALSE ;
	} 

	function more_than($data,$data2)
	{  
		return ($data>=$data2);
	} 

	function less_than($data,$data2)
	{  
		return ($data<=$data2);
	}  

	function more_than_except_zero($data,$data2)
	{  
		return ($data>=$data2&&$data2!=0);
	} 

	function less_than_except_zero($data,$data2)
	{  
		return ($data<=$data2&&$data2!=0);
	}  
	

	function min_length($data,$length)
	{  
		return (count($data)>$length);
	}  
	
	function max_length($data,$length)
	{  
		return (count($data)<$length);
	}  
	 
	 public function is_natural($data)
	{
		return ctype_digit((string) $data);
	}
 
	public function is_natural_no_zero($data)
	{
		return ($data != 0 && ctype_digit((string) $data));
	}
 
	public function is_numerik($data)
	{
		return is_numeric($data);
	}

	public function is_huruf($data)
	{
		return (bool) preg_match('/^[a-zA-Z]+$/', $data);
	}
	
	public function is_time($data)
	{
		return (bool) preg_match('/^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/', $data);
	}
	
	public function is_email($data)
	{
		return (bool) preg_match(' /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm', $data);
	} 
 
	function is_unique_custom($data, $field) 
	{
			$CI = & get_instance();
			list($table, $field) = explode('.', $field);
			$query = $CI->db->limit(1)->get_where($table, array($field => $data,'is_delete'=>'0'));

			return $query->num_rows() === 0;
	}
	 
	function is_unique_edit_custom($data, $field) {
		
		$CI = & get_instance();
        list($table, $field, $_id, $id) = explode('.', $field);
		 
        $query = $CI->db->limit(1)->get_where($table, array($field => $data,'is_delete'=>'0')); 
		
        if ($query->num_rows() > 0) {
		  if ($query->row()->$_id == $id){
				return TRUE;
				}
            else
                return FALSE;
        }else {
            return TRUE;
        }
    }
		
	
}

?>