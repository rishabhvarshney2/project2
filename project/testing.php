 
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
			<script src="fun.js"></script>
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;"> 
<table>	

  <?php  
			$city=$_POST['cate'];
			
			
                $connect = mysqli_connect("localhost", "root", "", "home"); 				 
                $query = "SELECT image,description,mobile
				FROM home1 WHERE (location='$city')" ;  
                $result = mysqli_query($connect, $query) or die( mysqli_error($connect));;
                while($row = mysqli_fetch_array($result))  
				{
			
                     echo '  		<html>
									<body bgcolor:green>
									<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" /> 
									<br />
									description:'.$row['description'].'
									<br />
									mobile_no:'.$row['mobile'].'
									<hr />
									</body>
									</html>
									
						
									
   
                     ';  
                }
				

				
                ?> 

                </table>  
           </div>  
      </body>  
 </html>  



