<?php //base controller and model
class Model_Crud extends Model
{

	function insert($table, $data){
		if(!$table || !$data) return false;
		
		$keys = array();
		$vals = array();
		foreach($data as $k => $v){
			array_push($keys, $k);
			array_push($vals, mysql_real_escape_string($v));
		}

		$sql = "INSERT INTO $table "
		. "(".implode(",", $keys).") "
		. "VALUES "
		. "('".implode("','", $vals)."')";

		mysql_query($sql);
		if(mysql_affected_rows() >= 1){
			return true;
		}else{
			return false;
		}
	}

	function select($table, $data, $where = "", $orderby = ""){
		if(!$table) return false;
		if(!$data) $data = array("*");

		$sql = "SELECT "
		. implode(",", $data)
		. " FROM $table "
		. " ".$where." "
		. " ".$orderby." ";

		$results = mysql_query($sql);
		if($results){
			$returnarr = array();
			while($r = mysql_fetch_array($results)){
				array_push($returnarr, $r);
			}

			return $returnarr;
		}
			

		return false;
	}

	function update($table, $data, $where = ""){
		if(!$table || !$data) return false;

		$kv = array();
		foreach($data as $k => $v){
			array_push($kv,$k."='".mysql_real_escape_string($v)."'");
		}

		$sql = "UPDATE $table SET "
		. implode(",", $kv)
		. " ".$where." ";

		mysql_query($sql);
		if(mysql_affected_rows() >= 1){
			return true;
		}else{
			return false;
		}
	}

	function delete($table, $where, $limit = 1, $orderby = ""){
		if(!$table) return false;

		$sql = "DELETE FROM $table ".$where." ".$orderby." LIMIT $limit";
		mysql_query($sql);

		if(mysql_affected_rows() >= 1){
			return true;
		}else{
			return false;
		}
	}
}
?>