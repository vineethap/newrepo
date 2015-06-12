<?php
require ('Model.php');
Class Person extends Model {
	public $name;
	public $age;
	public $address;
	public $id;
	
	public function setName($nme){
		$this->name=$nme;
	}
	 public function getName(){
	 	return $this->name;
	 }
	 public function setId($i){
		$this->id=$i;
	}
	public function getId(){
		 return $this->id;
	}
	 public function setAge($ag){
		$this->age=$ag;
	}
	
	public function getAge(){
	 return $this->age;
	}
	public function setAddress($adr){
		$this->address=$adr;
	}
    public function getAddress(){
		return $this->address;
	}
}

$psn=new Person;
if (isset($_POST['sve'])){
$psn=new Person;
$psn->setId($_POST['fnd']);
echo $psn->getId();
$psn->setName($_POST['name']);
echo $psn->getName();
echo '<br>';
$psn->setAge($_POST['ag']);
echo $psn->getAge();
echo '<br>';
$psn->setAddress($_POST['adrs']);
echo $psn->getAddress();
echo '<br>';
$psn->save();
}

if(isset($_POST['find'])){
	
	$psn=new Person;


	$i=$_POST['fnd'];
	
		$psn->find($i);

}
if (isset($_POST['ID'])){
$my_id=$_POST['ID'];
$psn->delete($my_id);

}


?>