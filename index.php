
<?php


	class registration 
	   {
	        public $nname;
			public $aage;
			public $ggender;
			public $aaddress;
			public $qqualification;
			public $ccandidate_id;
			public $ppassword;
			
	   }
	   
    function class1()
        {
        	global $id;
        	$id=0;
      	    $regis = new registration();
		    $regis->nname=$name=$_GET['name'];
			$regis->aage=$age=$_GET['age'];
			$regis->ggender=$gender=$_GET['gender'];
			$regis->aaddress=$address=$_GET['address'];
			$regis->qqualification=$qualification=$_GET['qualification'];
			
			
		  	
            $candidate_id=substr($name,0,3).'_'.$age.'_'.substr($gender,0,1).'_'.$id;
            $password=$id.'_'.$candidate_id;
            $id++;


            $regis->ccandidate_id=$candidate_id;
			$regis->ppassword=$password;

		    $a='<br>';
			echo 'Name: '.$regis->nname.$a.$a.'Age: '.$regis->aage.$a.$a.'Gender: '.$regis->ggender.$a.$a;
			echo 'Qualification: '.$regis->qqualification.$a.$a;
			echo 'Candidate_id: '.$regis->ccandidate_id.$a.$a.'Password: '.$regis->ppassword;
	        
	    }
    
    class1();

    
    





?>


