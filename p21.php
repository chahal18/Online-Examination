
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

    $regis= new registration();

    $name=$_GET['name'];
    
    $age=$_GET['age'];

    $gender=$_GET['gender'];

    $address=$_GET['address'];

    $qualification=$_GET['qualification'];

    $regis->nname=$name;
	
	$regis->aage=$age;
	
	$regis->ggender=$gender;

	$regis->aaddress=$address;
	
	$regis->qqualification=$qualification;

	echo $regis->nname.$a.$regis->aage;

    




?>


