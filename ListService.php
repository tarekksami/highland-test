<?php
class ListService {
	protected $_uid;
	protected $_db;

	function __construct($db, $uid){
		$this->db = $db;
		$this->uid = $uid;
	}

public function getList(){
	$sql = "SELECT * FROM items WHERE user_id = {$this->uid} AND deleted = 0;";
	$rs = $this->db->query($sql);
	return $rs;
}

public function addToList($item, $content){
	$sql = "INSERT INTO items (user_id, deleted, name, content) values({$this->uid}, 0, '{$item}', '{$content}');";
	$rs = $this->db->query($sql);
	if($this->db->affected_rows>0){
		return true;
	}
	return false;
}

public function removeFromList($id){
	$sql = "UPDATE items SET deleted = '1' WHERE id = '{$id}';";
	$rs = $this->db->query($sql);
	if($this->db->affected_rows>0){
		return true;
	}
	return false;
}

}
?>