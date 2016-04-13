<html>
        <head>  
                 <style>
                        body 
                             { 
                                background: url(Bing.jpg); 
                                background-class='img-thumbnail';
                                background-size: cover;
                             }
                  </style>

<p class="text-right">
       <button type="button-primary"><a href="ex24-1.html"> Login</button></a>
</p>       

            </head>
    
  <body>
         
           
             
           <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        

        <h1 style="color:lightgrey">Online Examination </h1>
  
            <div class="container">

              <div class="jumbotron">
            
                <p class="text-center">
                 
                   <b style="color:#FBBC05;">



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

			$file=fopen('student_detail3.txt','w');
			
			$a= "\n";
			
			fwrite($file, $candidate_id.$password);
			
			fclose($file);
	        
	    }
    
    class1();

    
    





?>


                      
                </p>
                </div>
            </div>  
       

   </body>
</html> 




