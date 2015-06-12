<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">	

</head>
<body>

 <div class="container-fluid">
  <div class="row" id="r1">
  
   <div class="col-lg-4 col-lg-offset-5">
	<div class="panel panel-default">
     <div class="panel-body">
      <form class="form-horizontal" method="post" action="Animals.php">
	   <h2>Animals</h2>
	    <div class="form-group">
		   <label class="col-sm-2 control-label">Name</label>
		   <div class="col-sm-10">
		   <input type="text" class="form-control" id="input1" name="name">
		    </div>
	      </div>
		  <div class="form-group">
		     <label class="col-sm-2 control-label" >Age</label>
		     <div class="col-sm-10">
		     <input type="number" class="form-control" id="input2" name="ag">
		     </div>
		   </div>
		 
          <div class="form-group">
		    <label class="col-sm-2 control-label" >Num_legs</label>
		    <div class="col-sm-10">
		    <input class="form-control" type="text" id="input3" name="num">
		    </div>
          </div>
		  <div class="col-sm-10">
			<button type="submit" class="btn btn-primary" id="btn" name="sve">Save</button>
		  </div>
                     <br/>
                     <br/>
                     <br/>
                     <br/>
		  <div class="form-inline">
		    <div class="col-sm-10">
		    <input type="text" class="form-control" id="inp" name="fnd" placeholder="enter id">
		    </div>
		  </div>
		  <div class="form-inline">
		    <div class="col-sm-10">
		    <button type="submit" class="btn btn-primary" id="btn" name="find">find</button>
		    </div>
          </div>
	 </form>
   </div>				   
  </div>
	       <table  class="table table-bordered">
		     <tr>
			   <th>#</th>
				<th>name</th>
				<th>age</th>
				<th>num_legs</th>	
				<th></th>
			 </tr>
		    <?php
		    require ('Animals.php');
		    //echo $reslt;
		    $anml=new Animals;
		    $reslt=$anml->load();
		    while($row= $reslt->fetch_assoc()){
		   ?>
	       <tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['age']; ?></td>
			<td><?php echo $row['num_legs']; ?></td>
			<td><button name="del" onclick="delete1(<?php echo $row['id']; ?>)"  id="btn">delete</button></td>
	       </tr>
	       <?php
	        }
	       ?>
	      </table>
    </div>	 
   </div>
  </div>
 </body>
 <script type="text/javascript">

 function delete1(id){
    	alert(id);
         
    
    var values={
    	ID : id
    }
    $.ajax({
				url : 'Animals.php',
				type : 'POST',
				data : values,
				dataType : 'text',
		complete : function(data) {
					console.log("on Complete", data);
				},
		success : function(data){
					console.log("on Success", data);
					
					
				},
		error : function(data) {
 					console.log("on error", data.error());
				}
    
    });
}
 
 </script>
</html>