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
	
						$candidate_id=$_GET['id'];
						
						$password=$_GET['password'];
						
						$match=$candidate_id.$password;

						$file = file_get_contents("student_detail3.txt");
                            if (preg_match('/'.$match.'/', $file)) 
                                {
								    echo "Login Successful";
								     header('Location: ex24-2.html');
								}
								else {
								    echo "Invalid ID/Password";
								}


                   ?>


                      
                </p>
                </div>
            </div>  
       

   </body>
</html> 




