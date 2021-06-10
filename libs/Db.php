<?php 
class Db{
	function __construct(){
		$this->con=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB);
		
	}
	function addEdit($table,$data,$id=''){

		$data=array_map('addslashes',$data);
		$qry="insert into $table set ";
		$wh='';
		if($id){
			$qry="update $table set ";
			$wh=" where id=$id";
		}
		foreach ($data as $key => $value){
			$qry.="$key='$value',";
		}
		$qry=substr($qry,0,-1).$wh;
		mysqli_query($this->con,$qry);
	
	}
	function fetchOne($table,$id,$cols='*'){
		return mysqli_fetch_assoc(mysqli_query($this->con,"select $cols from $table where id=$id"));
			
	}
	function fetchQry($qry){
		return mysqli_fetch_assoc(mysqli_query($this->con,$qry));
			
	}
	function fetchAll($sql){
		return mysqli_fetch_all(mysqli_query($this->con,$sql),MYSQLI_ASSOC);

	}
	function fetchRow($sql){
		return mysqli_num_rows(mysqli_query($this->con,$sql));
	}
	function delete($table,$id){
		mysqli_query($this->con,"delete from $table where id =$id");
	}
}

 ?>