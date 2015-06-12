<?php
Class Model{
	public function connectn(){
    $conn=mysqli_connect("localhost","root","root","first_db");
	if($conn){
		return $conn;
	}
}
 // $i=$_POST['fnd'];
 
public function save(){

	$con=$this->connectn();
	$tblnme=get_class($this);
	$id=$this->id;
	 if($id==null){
     $clmn="";
     $cl_vl="";
     foreach ($this as $key => $value) {
     $clmn.=$key.',';
     $cl_vl.='"'.$value.'",';

     }
     $clmn=chop($clmn,",");

     $cl_vl=chop($cl_vl,",");
     // echo $clmn;
     // echo '<br>';

     // echo $cl_vl;
     $insrt= 'insert into '.$tblnme.'  ('.$clmn.') values ('.$cl_vl.')';
     echo $insrt;
$result=$con->query($insrt);
	 } else{
	 	$clm="";
     
	     foreach ($this as $key => $value) {
	     	$clm.=$key.'="'.$value.'",';
	     	
     	}
     	$clm = trim ($clm, ',');
     	$updt='update '.$tblnme.' set '.$clm.' where id='.$id;
     	$rslt=$con->query($updt);
     	if ($rslt) {
     		echo $updt;
     	}
	}

}
	
		
public function find($i){
   
	$cn=$this->connectn();
    $tblnme=get_class($this);
    $slct='select * from '.$tblnme.' where id='.$i;
    //echo $slct;
    $re=$cn->query($slct);
    while($row = $re->fetch_assoc()){
    	foreach ($row as $key => $value) {
    		echo '<br>';

    	 	echo $key. ':' . $value;
    	 	
    	 	echo '<br>';
    	 	 } 
         }
    }
   public function load(){
   		$cn=$this->connectn();
   		$tblnme=get_class($this);
   		$selct='select * from '.$tblnme.' ';
   		//echo $selct;
   		$reslt=$cn->query($selct);
   		return $reslt;
        // while($row= $reslt->fetch_assoc()){
        //  foreach ($row as $key => $value) {
         		
        //  	}	
        // }


   } 
   public function delete($i){
   	$cn=$this->connectn();
   		$tblnme=get_class($this);
   		$del='delete from '.$tblnme.' where id='.$i;
   		echo $del;
   		$resl=$cn->query($del);
   		return $resl;

   }

 }

?>