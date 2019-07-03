  <?php  
			$location=$_POST['name'];
			$category=$_POST['categ'];
			$bedroom=$_POST['add'];
			$name=$_POST['name1'];
			$Email=$_POST['email'];
			$mobile=$_POST['mob'];
			$pic=addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
			$descr=$_POST['des'];
			
                $connect = mysqli_connect("localhost", "root", "", "home"); 				 
                $query = "INSERT INTO home1 (Location,Category,Bedrooms,email,Name,Image,mobile,description) VALUES('$location','$category','$bedroom','$Email','$name','$pic','$mobile','$descr')";  
                $result = mysqli_query($connect, $query) or die( mysqli_error($connect));;  
                 
                if ($result===TRUE){
					echo "
							
							SUCCESSFULL
							";
				}
				else{
					echo"FAILED";
				
				}

				
                ?> 