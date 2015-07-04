<?php
class Member extends CI_Model
{
			var $id; //
			var $name; //
			var $lastName; //
			var $userName; //
			var $passWord; //
			var $status; //
			var $picture;

	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

	###################################### GET SET ######################################
 ###### SET : $id ######

	public function setId($id)
	{
		$this->id = $id;
	}
###### SET : $id ######

###### GET : $id ######

	public function getId()
	{
		return $this->id;
	}
###### GET : $id ######



###### SET : $name ######

	public function setName($name)
	{
		$this->name = $name;
	}
###### SET : $name ######

###### GET : $name ######

	public function getName()
	{
		return $this->name;
	}
###### GET : $name ######


###### SET : $lastName ######

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}
###### SET : $name ######


###### GET : $lastName ######

	public function getLastName()
	{
		return $this->lastName;
	}
###### GET : $lastName ######



###### SET : $userName ######


	public function setUserName($userName)
	{
		$this->userName = $userName;
	}
###### SET : $userName ######

###### GET : $userName ######

	public function getUserName()
	{
		return $this->userName;
	}
###### GET : $userName ######


###### SET : $passWord ######

	public function setPassWord($passWord)
	{
		$this->passWord = $passWord;
	}
###### SET : $passWord ######
###### GET : $userName ######

	public function getPassWord()
	{
		return $this->passWord;
	}
###### GET : $userName ######


###### SET : $status ######

	public function setStatus($status)
	{
		$this->status = $status;
	}
###### SET : $status ######
###### GET : $status ######

	public function getStatus()
	{
		return $this->status;
	}
###### GET : $status ######
public function setPicture($picture)
{
	$this->picture = $picture;
}

public function getPicture()
{
	return $this->picture;
}

###################################### End GET SET ######################################


###################################### findByUserName ######################################

	function findByUserName($UserName)
	{
		$query=$this->db->query
			('
				SELECT id,name,lastName FROM member WHERE id LIKE "%'. $UserName .'%" ORDER BY username
			');

		return $query;
	}
###################################### findByUserName ######################################


###################################### findByPk ######################################

	function findByPk($pk)
	{
		$query=$this->db->query
			('
				SELECT id,name,lastname,userName FROM member WHERE id = "'. $pk .'"
			');

		return $query->row_array();
	}
###################################### findByPk ######################################


###################################### findByAll ######################################

	function findByAll()
	{
		$query=$this->db->query
			('
				SELECT id,name,picture  FROM student
			');

		return $query->result_array();
	}
###################################### findByAll ######################################


###################################### update ######################################

	public function update()
	{
		$data = array(
			'name'=>$this->getName(),
			'lastName'=>$this->getLastName()
		);

		$this->db->where('id', $this->getId());
		$this->db->update('member', $data);

		return true;
	}

###################################### update ######################################


###################################### delete ######################################
	public function delete()
	{
		$array=array(
			'id'=>$this->getId()
		);

		$this->db->delete('member',$array);

		return true;
	}

###################################### delete ######################################

###################################### add ######################################
	public function add()
	{
		$array = array
		(
			'name'  => $this->getName(),
			'lastname'=>$this->getLastname(),
			'username'=>$this->getUsername(),
			'password'=>$this->getPassWord(),
			'status'=>$this->getStatus()

		);

		$this->db->insert('member', $array);

		return $this->db->insert_id();
	}
	###################################### add ######################################

	######################## function login #############################
	function login()
	 {
	   $this -> db -> select('*');
	   $this -> db -> from('member');
	   $this -> db -> where('username', $this->getUserName());
	   $this -> db -> where('password', $this->getPassWord());
	   $this -> db -> limit(1);

	   $query = $this -> db -> get();

	   if($query -> num_rows() == 1)
	   {
			 return $query->result();
	   }
	   else
			  return FALSE;
	   }
	 }
	 ######################## end function login #############################



?>
