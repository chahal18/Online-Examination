

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
	
						$ans1=$_GET['Q1'];
						
						$ans2=$_GET['Q2'];

						$ans3=$_GET['Q3'];


						#Marks 

					
						   $a='0';

                              if ($ans1=='Q1.2')
                                {
                                	$a++;
                                };

                              if ($ans2=='Q2.3') 
                                {
                                	$a++;
                                };

                              if ($ans3=='Q3.2') 
                                {
                                	$a++;
                                };

                            echo "Total Correct Answers : ".$a;    

                   ?>


                      
                </p>
              </div>
            </div>  
   </body>
</html> 





