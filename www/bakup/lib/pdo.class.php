<?php 
/*
Author: Jellan Quitos
Date Created: June 17, 2014
Description: Wraps the php PDO class
*/
class PDO_wrapper{
	
	private $dbh = null;
	
	function __construct($host,$dbname,$user,$pass){
		$this->init($host,$dbname,$user,$pass);
	}
	
	function init($host,$dbname,$user,$pass){
		try {
			$this->dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
	
	function insert($table,$data){
		try {
			$query = "INSERT INTO $table ";
			
			$this->setParams($data,$query);
			$this->setValues($data,$query);
			//echo $query;
			$stmt = $this->dbh->prepare($query);
			/* foreach($data as $key => $val){
				$stmt->bindParam(":$key", $val);
				echo 'wa';
			} */
			
			//var_dump($stmt);
			return $stmt->execute($this->setQueryParams($data));
			//$stmt->debugDumpParams();
		}catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
	
	function update(){
	
	}
	
	function delete(){
	
	}
	
	function query($q){
		$stmt = $dbh->prepare($q);
		if ($stmt->execute()) {
		  return $stmt->fetch(PDO::FETCH_OBJ);
		}
	}
	
	private function setParams(&$data,&$query){
		$x = 0;
		$count = count($data);
		foreach($data as $key => $val){
			if($count == 1){
				$query .= "($key)";
				$x++;
				continue;
			}
			if($x == 0){
				$query .= "($key, ";
				$x++;
				continue;
			}
			if($x == $count-1){
				$query .= "$key) ";
				$x++;
				continue;
			}
			$query .= "$key, ";
			$x++;
		}
		
		$query .= "VALUES ";
	}
	
	private function setValues(&$data,&$query){
		$x = 0;
		$count = count($data);
		foreach($data as $key => $val){
			if($count == 1){
				$query .= "(:$key)";
				$x++;
				continue;
			}
			if($x == 0){
				$query .= "(:$key, ";
				$x++;
				continue;
			}
			if($x == $count-1){
				$query .= ":$key) ";
				$x++;
				continue;
			}
			$query .= ":$key, ";
			$x++;
		}
	}
	
	private function bindParams(&$data,&$stmt){
		foreach($data as $key => $val){
			$stmt->bindParam(":$key", $val);
			//var_dump($key.' => '.$val);
			/* if(is_numeric($val)){
				$stmt->bindParam(":$key", $val, PDO::PARAM_INT);
			}else{
				$stmt->bindParam(":$key", $val);
			} */
		}
	}
	
	private function setQueryParams($data){
		$res = array();
		foreach($data as $key => $val){
			$res[":$key"] = $val;
		}
		
		return $res;
	}
}
?>