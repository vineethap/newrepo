<?php
require ('Model.php');
Class Animals extends Model {
	public $name;
	public $age;
	public $num_legs;
	public $id;
	
	public function setName($nme){
		$this->name=$nme;
	}
	 public function getName(){
	 	return $this->name;
	 }
	 public function setAge($ag){
		$this->age=$ag;
	}
	public function getAge(){
	 return $this->age;
	}
	public function setNum_legs($nm){
		$this->num_legs=$nm;
	}
    public function getNum_legs(){
		return $this->num_legs;
	}
	public function setId($i){
		$this->id=$i;
	}
	public function getId(){
		 return $this->id;
}
}
$anml=new Animals;
if (isset($_POST['sve'])){
//	$anml=new Animals;
$anml->setId($_POST['fnd']);
echo $anml->getId();

$anml->setName($_POST['name']);
echo $anml->getName();
echo '<br>';
$anml->setAge($_POST['ag']);
echo $anml->getAge();
echo '<br>';
$anml->setNum_legs($_POST['num']);
echo $anml->getNum_legs();
echo '<br>';
$anml->save();
}
if(isset($_POST['find'])){
	
	


	$i=$_POST['fnd'];
	
		$anml->find($i);

}
if (isset($_POST['ID'])){
$my_id=$_POST['ID'];
$anml->delete($my_id);

}
?>