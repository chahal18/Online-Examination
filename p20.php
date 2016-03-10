<?php
    
    echo '<h1>PHP Program to store the details of the Student\'s registration. </h1>';
	
	$file=fopen('student_detail3.txt','w');
	
	$name=$_GET['name'];
	
	$course=$_GET['course'];
	
	$type=$_GET['type'];
	
	$a= "\n";
	
	$fee;
	
	if($course=='Maths')
	  {
		  if($type=='Normal')
			  $fee='100000'
		  else
		      $fee='190000';
	  };
	
  	else
  	  {
  		  if($type=='Normal')
			  $fee='90000';
		  else
			  $fee='1700000';
	
	  };
	  
	fwrite($file, $name.$a.$course.$a.$type.$a.$fee);
	
	echo '<h4>Content written to file.</h4>';
	fclose($file);
	
?>