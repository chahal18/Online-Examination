
<?php


	class registration 
	   {
	        public $nname;
			public $aage;
			public $ggender;
			public $aaddress;
			public $qqualification;
			
	   }

    function regist($name,$age,$gender)
	   {

		  	global $idgen;

			$idgen=substr($name,0,3).'_'.$age.'_'.$gender;

			echo $idgen;

	   }

	$a='<br>';   

    $regis = new registration();
    
    $regis->nname=$name=$_GET['name'];
	
	$regis->aage=$age=$_GET['age'];
	
	$regis->ggender=$gender=$_GET['gender'];

	$regis->aaddress=$address=$_GET['address'];
	
	$regis->qqualification=$qualification=$_GET['qualification'];


	echo $regis->nname.$a.$regis->aage;

    




?>


