<?PHP
  include('dbControl/db.php');
  
  $connection = new db();
  $conobj=$connection->OpenCon();
  $query = " SELECT `Fullname`,`username`, `file`, `category`, `experience`,`mobile`  FROM `technician` order by id ASC ";

	$queryfire = mysqli_query($conobj, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
			?>
			
		<div class="col-lg-3 col-md-3 col-sm-12">
			
			<form>
				<div class="card">
					<h6 class="card-title bg-info text-white "> <?php echo
					 $product['Fullname'];  ?>   </h6>

					<div class="card-body">
						 <img src="<?php echo
					 $product['file'];  ?>" alt="phone" class="img-fluid mb-2" >

					 <h6> <?php echo
					 $product['category'];  ?>  </h6> 
                      
                      <h6> experience: <?php echo
					 $product['experience'];  ?>  </h6> 

                    <h6> Number: <?php echo
					 $product['mobile'];  ?>  </h6> 
                     <h6> Username: <?php echo
					 $product['username'];  ?>  </h6> 
                     
                     

					 <h6 class="badge badge-success"> 4.1 <i class="fa fa-star"> </i> </h6>

					</div>
					<div class="btn-group d-flex">
						<button type="submit" class="btn btn-success flex-fill" > <a href="Back_End/messageTechnician.php?uname=<?php echo ($uname); ?>"
                class="text-white"> Message </a> </button> 
					</div>


				</div>
			</form>

		</div>


	<?php		
		}
	}
	?>