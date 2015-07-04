<?php
class Hunsa_md extends CI_Model
{
    var $id;// id_user
    var $username;//ชื่อสมาชิก
    var $passone;//รหัสผ่าน
    var $passtwo;//ยืนยันรหัสผ่าน
    var $email;//email_user
    var $firstname;//ชือ
    var $lastname;//นามสกุล
    var $nickname;//ชื่อเล่น
    var $idcard;//บปช
    var $sex;//เพศ
    var $birthday;//birdth
    var $address;//ที่อยู่
    var $town;//ตำบล
    var $city;//อำเภอ
    var $provin;//จังหวัด
    var $postcode;//รหัสไปษณีย์
    var $telephone;//เบอร์บ้าน
    var $phone;//มือถือ
      	function __construct()
      	{
      		parent::__construct();
      	}

  ################# get set ##################################
        public function setId($id)
        {
          $this->id = $id;
        }

        public function getId()
        {
          return $this->id;
        }

###################################################
        public function setUsername($username)
        {
          $this->username = $username;
        }
        public function getUsername()
        {
          return $this->username;
        }
###################################################
        public function setPassone($passone)
        {
          $this->passone = $passone;
        }
        public function getPassone()
        {
          return $this->passone;
        }
####################################################
        public function setPasstwo($passtwo)
        {
          $this->passtwo = $passtwo;
        }
        public function getPasstwo()
        {
          return $this->passtwo;
        }
####################################################
        public function setEmail($email)
        {
          $this->email = $email;
        }
        public function getEmail()
        {
          return $this->email;
        }
####################################################
        public function setFirstname($firstname)
        {
          $this->firstname = $firstname;
        }

        public function getFirstname()
        {
          return $this->firstname;
        }

####################################################
        public function setLastname($lastname)
        {
        $this->lastname = $lastname;
        }

        public function getLastname()
        {
        return $this->lastname;
        }
####################################################
        public function setNickname($nickname)
        {
          $this->nickname = $nickName;
        }

        public function getNickname()
        {
          return $this->nickname;
        }
####################################################
        public function setIdcard($idcard)
        {
        $this->idcard = $idcard;
        }

        public function getIdcard()
        {
        return $this->idcard;
        }
####################################################
        public function setSex($sex)
        {
        $this->sex = $sex;
        }

        public function getSex()
        {
        return $this->sex;
        }
####################################################
        public function setBirthday($birthday)
        {
        $this->birthday = $birthday;
        }

        public function getBirthday()
        {
        return $this->birthday;
        }

####################################################
        public function setAddress($address)
        {
        $this->address = $address;
        }

        public function getAddress()
        {
        return $this->address;
        }
####################################################
        public function setTown($town)
        {
          $this->town = $town;
        }

        public function getTown()
        {
          return $this->town;
        }
####################################################
        public function setCity($city)
        {
          $this->city = $city;
        }

        public function getCity()
        {
          return $this->city;
        }
####################################################
        public function setProvin($provin)
        {
          $this->provin = $provin;
        }

        public function getProvin()
        {
          return $this->provin;
        }
####################################################
        public function setPostcode($postcode)
        {
          $this->postcode = $postcode;
        }

        public function getPostcode()
        {
          return $this->postcode;
        }
####################################################
        public function setTelePhone($telePhone)
        {
        $this->telePhone = $telePhone;
        }

        public function getTelePhone()
        {
        return $this->telePhone;
        }
####################################################
        public function setPhone($phone)
        {
          $this->phone = $phone;
        }

        public function getPhone()
        {
          return $this->phone;
        }

  ##################### function Add ###############################
      public function add()
      {
        $array = array
    		(
          'id'=>$this->getId(),
    			'username' => $this->getUsername(),
    			'passone'=>$this->getPassone(),
          'email'=>$this->getEmail(),
          'firstname'=>$this->getFirstname(),
          'lastname'=>$this->getLastname(),
          'nickname'=>$this->getNickname(),
          'idcard'=>$this->getIdcard(),
          'sex'=>$this->getSex(),
          'birthday'=>$this->getBirthday(),
          'address'=>$this->getAddress(),
          'town'=>$this->getTown(),
          'city'=>$this->getCity(),
          'provin'=>$this->getProvin(),
          'postcode'=>$this->getPostcode(),
          'telePhone'=>$this->getTelePhone(),
          'phone'=>$this->getPhone()

    		);

    	  	$this->db->insert('hunsa',$array);
      }

}
?>
